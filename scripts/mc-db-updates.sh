#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
CDIR=$( pwd )

cd $DIR/..

NUM_CORES=$(grep -c ^processor /proc/cpuinfo)
if [ $NUM_CORES -gt 1 ]; then
	NUM_PROCESSES=$(($NUM_CORES + 3))
else
	NUM_PROCESSES=1
fi


NAME=""

for i in "$@"
do
case $i in

    -p=*|--processes=*)
	    NUM_PROCESSES="${i#*=}"
	    shift # past argument=value
    ;;
    -n=*|--name=*)
	    NAME="${i#*=}"
	    shift # past argument=value
    ;;
    -h|--help)
    	    echo "
	mc-db-updates.sh [-p=8] [-n=recreate-] [-n='recreate pcache'] [-o=mapasculturais]

	-p=  | --processes=  numero de processos (padrão é o número de cores + 3)
	-n=  | --name=       o nome do db-update que deve rodar
"
    	    exit
    ;;
esac
done

echo "INICIANDO $NUM_PROCESSES PROCESSOS...";
COUNTER=0
while [  $COUNTER -lt $NUM_PROCESSES ]; do
    let COUNTER=COUNTER+1 

    HTTP_HOST=$DOMAIN REQUEST_METHOD='CLI' REMOTE_ADDR='127.0.0.1' REQUEST_URI='/' SERVER_NAME=127.0.0.1 SERVER_PORT="8000" php src/protected/tools/applpy-multicore-db-update.php $NUM_PROCESSES $COUNTER "$NAME"&
done
