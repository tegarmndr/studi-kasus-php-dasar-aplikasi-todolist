<?php

/**
 * Menghapus todo di list
 *
 * @param int $number Nomor item yang dihapus dari todoList
 * @return bool
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    } else if ($number === 0) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i+1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}