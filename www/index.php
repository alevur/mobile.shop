<?php

/**
 * Определяем с каким контроллером будем работать
 * проверяем получен ли параметр GET?
 * да - пропускаем через ucfirst(первая буква в верхнем регистре)
 * нет - передаем параметр index
 * */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

echo 'Подключаемый контроллер '.$controllerName;