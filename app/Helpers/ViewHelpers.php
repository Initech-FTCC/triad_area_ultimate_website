<?php

function active_class($controller, $currentController) {
    if ($controller == $currentController)
        return 'active';
    else return '';
}

function getControllerName($fullPath)
{
    if (!isset($controller)) {
        list($controller, $action) = explode('@', $fullPath);
        $controller = basename($controller);
        return $controller;
    }
}

function getActionName($fullPath)
{
    if (!isset($controller)) {
        list($controller, $action) = explode('@', $fullPath);
        return $action;
    }
}

function full_name($object)
{
    return ucfirst($object->first_name) . ' ' . ucfirst($object->last_name);
}

function getEnumValues($table, $column)
{
    $type = DB::select( DB::raw("SHOW COLUMNS FROM $table WHERE Field = '$column'") )[0]->Type;
    preg_match('/^enum\((.*)\)$/', $type, $matches);
    $enum = array();
    foreach( explode(',', $matches[1]) as $value )
    {
        $v = trim( $value, "'" );
        $enum = array_add($enum, $v, $v);
    }
    return $enum;
}