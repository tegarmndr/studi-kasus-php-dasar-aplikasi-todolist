<?php

/**
 * Menampilkan todo di list
 * @return void
 */
function showTodoList() : void
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $index => $value)
    {
        echo "$index. $value" . PHP_EOL;
    }
}