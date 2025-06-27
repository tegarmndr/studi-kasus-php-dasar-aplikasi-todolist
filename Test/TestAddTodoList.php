<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Tegar");
addTodoList("Mandiri");

var_dump($todoList);