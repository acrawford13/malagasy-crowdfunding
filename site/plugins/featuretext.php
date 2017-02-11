<?php

kirbytext::$post[] = function($kirbytext, $value) {
    $initial = preg_replace('/(\(featuretext.*?)align(.*?\))/','\1text-align\2',$value);
    $initial = preg_replace('/(\(featuretext.*?)\s(size:\w*)\s(.*?\))/','\1 \3 \2',$initial);
    //$initial = preg_replace('/(\(featuretext.*?)size(.*?\))/','\1font-size\2',$initial);
    $initial = preg_replace('/(color:[^\s)"]*)/','\1;',$initial);
    $initial = preg_replace('/(text-align:[^\s)"]*)/','\1;',$initial);
    //$initial = preg_replace('/(font-size:[^\s)]*)/','\1;',$initial);
    return preg_replace('/<p>\(featuretext((?:(?:\s?color:[\w\d#]*;?)|(?:\s?text-align:\w*;?)){1,2})\)\s?(?:size:([\w]*))(?:<br \/>)?/','<h2 class="feature-text feature-\2" style="\1">',$initial);
};

kirbytext::$post[] = function($kirbytext, $value) {
    $initial = preg_replace('/(?:<br \/>)?(?:\n)?\(endfeaturetext\)(?:<br \/>)?(?:<\/p>)?\n/','</h2><p>',$value);
    return preg_replace('/(?:<br \/>)?(?:\n)?\(endfeaturetext\)(?:<br \/>)?(?:<\/p>)?/','</h2>',$initial);
};

?>