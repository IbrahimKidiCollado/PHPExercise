<?php

function language_list()
{
    $args = func_get_args();
    
    if (func_get_args() === 0) return array();
    
    return $args;
}

function add_to_language_list($list = array(), $lenguage) {
    array_push($list, $lenguage);
    return $list;
}
function prune_language_list($list) {
    array_shift($list);
    return $list;
}

function current_language($list) 
{
    return $list[0];
}

function language_list_length($list) 
{
    return count($list);
}
?>