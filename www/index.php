<?php
include_once '../config/config.php'; //инициализация настроек
include_once  '../library/mainFunction.php'; //основные функции

/**
 * Определяем с каким контроллером работать
 * проверяем получен ли параметр GET?
 * да - пропускаем через ucfirst(первая буква в верхнем регистре)
 * нет - передаем параметр index
 * */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

//Определяем с каким экшеном работать
$actionName = $_GET['action'] ?? 'index';

loadPAge($smarty, $controllerName, $actionName);