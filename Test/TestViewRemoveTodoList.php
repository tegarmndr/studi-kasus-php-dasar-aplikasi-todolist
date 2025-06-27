<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar NodeJS");
addTodoList("Belajar Memasak");
addTodoList("Belajar Bernyanyi");
addTodoList("Membaca Buku");

showTodoList();

viewRemoveTodoList();

showTodoList();