<?php
// определяет входит точка в прямоугольник или нет
$leftDownCoordinate = [1, 6]; // левая нижняя вершина прямоугольника
$rightUpCoordinate = [5, 10]; // правая верхняя вершина
$pointCoordinate = [1, 5]; / точка

if (($pointCoordinate[0] >= $leftDownCoordinate[0] && $pointCoordinate[0] <= $rightUpCoordinate[0])
 && ($pointCoordinate[1] >= $leftDownCoordinate[1] && $pointCoordinate[1] <= $rightUpCoordinate[1])) {
	echo 'Точка входит в прямоугольник';
} else {
	echo 'Точка НЕ входит в прямоугольник';
}