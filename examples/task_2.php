<pre>
<?php
// сортировка массива (убывание/возрастание) по заданному ключу
$menuArray = [
    [
        'title' => 'О компании',
        'sort' => 3,
        'path' => '/about/'
    ],
    [
        'title' => 'Каталог',
        'sort' => 11,
        'path' => '/catalog/'
    ],
    [
        'title' => 'Контакты',
        'sort' => 10,
        'path' => '/contacts/'
    ],
    [
        'title' => 'Акции',
        'sort' => 8,
        'path' => '/actions/'
    ],
    [
        'title' => 'Распродажа',
        'sort' => 2,
        'path' => '/sales/'
    ],
    [
        'title' => 'Новинки',
        'sort' => 5,
        'path' => '/newproduct/'
    ]
];

//var_dump($menuArray);

/**
* Функция возвращает массив отсортированный по ключу заданному в переменной $key и методу сортировки заданному в переменной $sort
* @param массив
* @param ключ по которому осуществляется сортировка
* @param  вариант сортировки убывание/возрастание
* @return отсортированный массив
*/

//var_dump($menuArray);


function arraySort($array, $key = 'sort', $sort = SORT_ASC)
{
    usort($array, function($a, $b) use ($key, $sort) {
        
        return ($sort === SORT_DESC) ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
    });

    return $array;
}

$menuArray = arraySort($menuArray);
echo '<br><br>' . 'ВЫВОДИМ РЕЗУЛЬТАТ СОРТИРОВКИ ПО-ВОЗРАСТАНИЮ' . '<br><br>';
var_dump($menuArray);

$menuArray = arraySort($menuArray, 'sort', SORT_DESC);
echo '<br><br>' . 'ВЫВОДИМ РЕЗУЛЬТАТ СОРТИРОВКИ ПО-УБЫВАНИЮ' . '<br><br>';
var_dump($menuArray);







/*
$numArr = [1, 3, 33, 14, 22, 40, 7, 30, 'sf', 'wer', 'aa', 'ab'];

var_dump($numArr);

echo array_multisort($numArr, SORT_ASC);

var_dump($numArr);

*/
/*
$ar1 = array(1, 3, 4, 2);
$ar2 = array(6, 5, 8, 7);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);
*/

/*
function cmp($a, $b)
{
    
    echo '$a = ' . $a . '<br>';
    echo '$b = ' . $b . '<br><br>';
    return $a <=> $b;


}

var_dump(cmp(4, 8));
echo '<br>';
var_dump(cmp(4, 4));
echo '<br>';
var_dump(cmp(9, 8));


$a = array(3, 36, 2);

var_dump(usort($a, "cmp"));

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
*/
/*
$array[0] = array('key_a' => 'z', 'key_b' => 'c');
$array[1] = array('key_a' => 'x', 'key_b' => 'b');
$array[2] = array('key_a' => 'y', 'key_b' => 'a');
*/

/*
$array = [
    [
        'key_a' => 'z',
        'key_b' => 'c'
    ],
    [
        'key_a' => 'x',
        'key_b' => 'b'
    ],
    [
        'key_a' => 'y',
        'key_b' => 'a'
    ]
];

function sortTestFunc($array, $key = 'key_b')
{
    usort($array, function($a, $b) use ($key) {
            echo '$a = ';
            var_dump($a)  . '<br>';
            echo '$b = ';
            var_dump($b)  . '<br>';
            echo '<br><br>';
            return strnatcmp($a[$key], $b[$key]);
        });

    return $array;
}

$array = sortTestFunc($array);

foreach ($array as $item) {
    echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
}

echo '<br><br>';
*/