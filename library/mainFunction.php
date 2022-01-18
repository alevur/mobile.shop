<?php

function loadPAge ($controllerName, $actionName = 'index')
{
    include_once PATHPREFIX.$controllerName.PATHPOSTFIX;

    $functionName = $actionName.'Action';
    $functionName();

}