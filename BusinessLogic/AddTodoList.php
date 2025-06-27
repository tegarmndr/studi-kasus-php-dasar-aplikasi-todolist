<?php

/**
 * Menambah todo ke list
 *
 * @param string $todo Item yang ditambahkan ke todoList
 * @return void
 */
function addTodoList(string $todo): void
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}