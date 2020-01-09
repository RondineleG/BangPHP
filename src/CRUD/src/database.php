<?php

 mysqli_report(MYSQLI_REPORT_STRICT);

function openDatabase()
{
    try {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $connection;
    } catch (Exception $exception) {
        echo $exception->getMessage();
        return null;
    }
}
function closeDatabase($connection)
{
    try {
        mysqli_close($connection);
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}
