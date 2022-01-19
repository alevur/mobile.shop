<?php
/**
 * Основные функции
 */


/**
 * Формирование запрашиваемой страницы
 *
 * @param $controllerName - название контроллера
 * @param string $actionName - название функции обработки страницы
 */
function loadPAge ($smarty, $controllerName, $actionName = 'index')
{
    include_once PATHPREFIX.$controllerName.PATHPOSTFIX;

    $functionName = $actionName.'Action';
    $functionName($smarty);

}

/**
 * Загрузка шаблона
 * @param $smarty - объект шаблонизатора
 * @param $templateName - название файла шаблона
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName.TEMPLATEPOSTFIX);
}