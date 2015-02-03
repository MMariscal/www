<?php

$db = array('host'=>'localhost',
            'user'=>'php',
            'password'=>'1234',
            'database'=>'crud'
);

$link = mysqli_connect($db['host'],$db['user'],$db['password']);
//print_r($link);

mysqli_select_db($link,$db['database']);

$query = "SELECT name, email FROM users";

$result = mysqli_query($link, $query); // Devuelve lo que se llama un RECORDSET (es un objeto)

while($row = mysqli_fetch_assoc($result))
{
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}