<?php

$data = [
    [
        'id' => 1,
        'tag' => 'Philosophy'
    ],
    [
        'id' => 2,
        'tag' => 'Culture'
    ],
    [
        'id' => 3,
        'tag' => 'Math'
    ],
    [
        'id' => 4,
        'tag' => 'Philosophy'
    ]

];

print_r(returnUniqueArray($data, 'tag'));

function returnUniqueArray(array $data, string $keyword): array
{
    $temp_data = array_unique(array_column($data, $keyword));
    return array_values(array_intersect_key($data, $temp_data));
}
