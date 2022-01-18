<?php
include_once '../config/config.php';
include_once  '../library/mainFunction.php';

/**
 * Определяем с каким контроллером работать
 * проверяем получен ли параметр GET?
 * да - пропускаем через ucfirst(первая буква в верхнем регистре)
 * нет - передаем параметр index
 * */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

//Определяем с каким экшеном работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPAge($controllerName, $actionName);