<?php
function Singleton($arg){
    return array($arg);
}
function null($arr){
    return !$arr;
}
function snoc(&$arr, $el){
    $arr[] = $el;
}
function length($arr){
    $count = 0;
    foreach($arr as $val){
        $count++;
    }
    return $count;
}
echo("Task1\n");
$task1 = 24;
var_dump(Singleton($task1));
echo("\n");

echo("Task2\n");
$task2 = null;
var_dump(null($task2));
echo("\n");

echo("Task3\n");
$task3_arr = array(20,21);
$task3_el = 25;
snoc($task3_arr,$task3_el);
var_dump($task3_arr);
echo("\n");

echo("Task4\n");
$task4 = array(22,124,124,21,21,2);
var_dump(length($task4));
echo("\n");
