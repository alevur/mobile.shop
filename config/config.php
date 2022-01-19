<?php

/**
 * Файл настроек
 */
//константы для обращения к контроллерам
const PATHPREFIX = '../controllers/';
const PATHPOSTFIX = 'Controller.php';

//используемый шаблон
$template = 'default';

//пути к файлам шаблонов(*.tp1)
define("TEMPLATEPREFIX", '../views/' . $template . '/'); // используется define из-за динамичной инициализации
const TEMPLATEPOSTFIX = '.tpl';

//пути к файлам шаблонов в веб пространстве
define("TEMPLATEWEBPATH", '/templates/' . $template . '/'); // используется define из-за динамичной инициализации

//Инициализация шаблонизатора Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATEPREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c');//путь к скомпилированным шаблонам
$smarty->setCacheDir('../tmp/smarty/cache');//путь к файлам для кеширования
$smarty->setConfigDir('../library/Smarty/configs');//путь к файлам для настроек

$smarty->assign('templateWebPath', TEMPLATEWEBPATH);//объявление переменной для использования

