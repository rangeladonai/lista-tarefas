<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'lista_tarefas';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);