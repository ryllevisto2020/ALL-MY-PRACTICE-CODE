<?php
header('Content-Type: application/json');
$encode = [
    [
        'id'=>0,
        'name'=>'visto'
    ],
    [
        'id'=>1,
        'name'=>'d'
    ]
];

$decode = "[
    {
        \"id\":0,
        \"name\":\"visto\"
    },
    {
        \"id\":1,
        \"name\":\"d\"
    }
]";
print_r(json_encode($encode));
echo ('<br>');

$decode_the_decodeData = json_decode($decode);
$encode_the_decodeData = json_encode($decode_the_decodeData);
print_r($encode_the_decodeData);
?>