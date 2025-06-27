<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

/**
 * Test tambah todoList
 */
addTodoList("Tegar");
addTodoList("Mandiri");
addTodoList("Joko");
addTodoList("Budi");
showTodoList();
echo "\n";

/**
 * Test hapus todoList
 */
removeTodoList(2);
showTodoList();
echo "\n";

/**
 * Test hapus todoList yang tidak terdaftar
 */
$success = removeTodoList(5);
var_dump($success);
showTodoList();
echo "\n";

/**
 * Test hapus todoList nomor item ke 0
 */
$success = removeTodoList(0);
var_dump($success);
showTodoList();