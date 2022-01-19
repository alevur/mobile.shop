<?php
/**
 * Контроллер главной страницы
 */
function testAction ()
{
    echo 'IndexController > TestAction.php';
}

/**
 * Формирование главной страницы сайта
 * @param $smarty
 */
function indexAction($smarty)
{
    $smarty->assign('pageTitle','Главная страница сайта');

    loadTemplate($smarty,'index');
}