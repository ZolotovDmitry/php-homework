<!--4.Отсортировать массив, который находится в файле lesson2/tasks.php, по 'price'.
При решении использовать функции для работы с массивами.-->
<?php
//Отсортировать массив по 'price'
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];
sort($arr);
foreach ($arr as $key => $val) {
}
var_dump($arr);
?>