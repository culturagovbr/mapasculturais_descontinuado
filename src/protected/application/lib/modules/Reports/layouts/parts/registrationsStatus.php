<?php
use MapasCulturais\i;

//Recebe os valores do sistema
$label = [];
$values = [];
$colors = [];
$height = '30vw';
$width = '100%';
$title = i::__('Status das inscrições');

//Prepara os dados para o gráfico
foreach ($data as $key => $value) {
    if ($key != i::__('Rascunho')) {
        $label[] = $key;
        $legends[] = $key;
        $values[] = $value;
        $colors[] = is_callable($color) ? $color() : $color;
    }
}

// Imprime o gráfico na tela
$this->part('charts/pie', [
    'labels' => $label,
    'data' => $values,
    'colors' => $colors,
    'legends' => $legends,
    'title' => $title,
    'height' => $height,
    'width' => $width,
]);
