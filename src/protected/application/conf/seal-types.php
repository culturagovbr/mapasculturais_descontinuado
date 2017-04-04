<?php
use MapasCulturais\i;
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
    	'need_permission' => array(
    			'label' => i::__('Aprovação para aplicar o Selo'),
                'type' => 'select',
    			'options' => [
                    's' => i::__('Sim'),
                    'n' => i::__('Não')
                ]
    	),
    ),
    'items' => array(
		0 => array( 'name' => i::__('Infinita' )),
        1 => array( 'name' => i::__('Dias' )),
        2 => array( 'name' => i::__('Semanas') ),
    	3 => array( 'name' => i::__('Meses') ),
    	4 => array( 'name' => i::__('Anos') )
    )
);