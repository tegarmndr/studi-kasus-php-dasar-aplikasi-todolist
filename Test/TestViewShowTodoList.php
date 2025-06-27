<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar Javascript");
addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");

viewShowTodoList();