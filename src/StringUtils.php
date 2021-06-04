<?php
namespace StringUtils;

function capitalize($text)
{
    if ($text === '') {
       return '';
    }
    $first = strtoupper($text[0]);
    $last = substr($text,1);
    return "${first}${last}";
}