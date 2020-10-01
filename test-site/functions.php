<?php

    /**
    * Функция возвращает массив отсортированный по ключу заданному в переменной $key и методу сортировки заданному в переменной $sort
    * @param массив
    * @param ключ по которому осуществляется сортировка
    * @param  вариант сортировки убывание/возрастание
    * @return отсортированный массив
    */

    function arraySort($array, $key = 'sort', $sort = SORT_ASC)
    {
        usort($array, function($a, $b) use ($key, $sort) {
            
            return ($sort === SORT_DESC) ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
        });

        return $array;
    }

    /**
    * Функция отрисовывает и сортирует меню
    * @param массив с элементами меню
    * @param класс CSS
    * @param  вариант сортировки убывание/возрастание
    */

    function drawMenu($menuArray, $cssClassValue = 'main-menu', $sort = SORT_ASC)
    {
        $sortMenuArray = arraySort($menuArray, 'sort', $sort);
        include($_SERVER['DOCUMENT_ROOT'] . '/templates/menu_template.php');
    }

    /**
    * Функция проверяет является раздел текущим или нет
    * @param массив с информацией о разделах
    * @return значение bool типа
    */

    function isCurrentUrl($menuArray)
    {
       return $menuArray['path'] === $_SERVER['REQUEST_URI'];
    }

    /**
    * Функция возвращает название пункта меню
    * @param массив с элементами меню
    * @return название пункта меню
    */

    function getTitleMenuItem($menuArray)
    {
        foreach ($menuArray as $menuItems) {
            if (isCurrentUrl($menuItems)) {
                return $menuItems['title'];
            }
        }
    }

    /**
    * Функция возвращает для активного раздела название CSS класса
    * @param массив с информацией о разделах
    * @return значение 'active'
    */
    function getCssClassActiveSection($menuItems)
    { 
        return isCurrentUrl($menuItems) ? 'active' : '';
    }


    /**
    * Функция возвращает обрезанное до 12 символов название пункта меню
    * @param текстовая строка
    * @param число определяющее сколько символов показывать
    * @return обрезанное название пункта меню в формате string
    */

    function trimMenu(string $text, int $visibleSymbols = 12) : string
    {
       return strlen($text) > $visibleSymbols ? substr($text, 0, $visibleSymbols) : $text;
    }