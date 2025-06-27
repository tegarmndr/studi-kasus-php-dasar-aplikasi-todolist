<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar TypeScript");
addTodoList("Belajar ReactJS");
addTodoList("Belajar Laravel");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();