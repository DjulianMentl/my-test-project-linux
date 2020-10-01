<?php
// обрезает строки длиннее 12 символов
$stringArray = [
    'Строка 1 с большой длиной',
    'Строка 2 с символами, которых много',
    'Строка 3 в которой много текста и которая длинней всех, хотя и не последняя',
    'Строка 4 и не большая и не маленькая'
];

/**
* Функция возвращает обрезанные строки с символами '...' в конце, если они длинее указанного числа
* @param текстовая строка
* @param число определяющее сколько символов показывать
* @return обрезанная или необрезанная строка в формате string
*/

function hideLongText(string $text, int $visibleSymbols = 12) : string
{
   return strlen($text) > $visibleSymbols ? substr($text, 0, $visibleSymbols) . '...' : $text;
}

foreach ($stringArray as $item) {
    echo hideLongText($item, 34) . '<br>';
}