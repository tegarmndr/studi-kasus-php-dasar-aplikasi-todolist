<?php

/**
 * Helper untuk interaksi user melakukan input
 *
 * @param string $info
 * @return string
 */
function input(string $info): string
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}