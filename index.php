<?php
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch($url){
    case '/':
        include './View/home.php';
    break;

    case '/tarefas':
        include './View/todas_tarefas.php';
    break;
    
    case '/tarefas/nova':
        include './View/nova_tarefa.php';
    break;

    default:
        echo 'ERRO 404';
}