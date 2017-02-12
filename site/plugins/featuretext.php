<?php

kirbytext::$post[] = function($kirbytext, $value) {
    $initial = preg_replace('/(\(featuretext.*?)align(.*?\))/','\1text-align\2',$value);
    $initial = preg_replace('/(\(featuretext.*?)\s(size:\w*)\s?(.*?\))?/','\1 \3 \2',$initial);
    $initial = preg_replace('/(\(featuretext[^\)]*)(color:[\d\w#]*)/','\1\2;',$initial);
    $initial = preg_replace('/(\(featuretext[^\)]*)(text-align:\w*)/','\1\2;',$initial);
    return preg_replace('/<p>\(featuretext((?:(?:\s?color:[\w\d#]*;?)|(?:\s?text-align:\w*;?)){1,2})\s?\)\s?(?:size:([\w]*))(?:<br \/>)?/','<h2 class="feature-text feature-\2" style="\1">',$initial);
};

kirbytext::$post[] = function($kirbytext, $value) {
    $initial = preg_replace('/(?:<br \/>)?(?:\n)?\(endfeaturetext\)(?:<br \/>)?(?:<\/p>)?\n/','</h2><p>',$value);
    return preg_replace('/(?:<br \/>)?(?:\n)?\(endfeaturetext\)(?:<br \/>)?(?:<\/p>)?/','</h2>',$initial);
};

kirbytext::$post[] = function($kirbytext, $value) {
    $initial = preg_replace('/(\(text.*?)align(.*?\))/','\1text-align\2',$value);
    $initial = preg_replace('/(\(text[^\)]*)(color:[\d\w#]*)/','\1\2;',$initial);
    $initial = preg_replace('/(\(text[^\)]*)(text-align:\w*)/','\1\2;',$initial);
    return preg_replace('/<p>\(text((?:(?:\s?color:[\w\d#]*;?)|(?:\s?text-align:\w*;?)){1,2})\s?\)\s?(?:<br \/>)?/','<p style="\1">',$initial);
};

kirbytext::$post[] = function($kirbytext, $value) {
    return preg_replace('/(?:<br \/>)?(?:\n)?\(endtext\)(?:<br \/>)?(?:<\/p>)?\n/','</p>',$value);
};
?>