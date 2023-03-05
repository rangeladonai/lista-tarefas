<?php
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
switch($url) {
    case 'home':
        require_once '../View/home.php';
    break;
    
    case '/tarefa/nova':
        require_once '../View/nova_tarefa.php';
    break;
    
    case '/tarefa/consulta';
        require_once '../View/todas_tarefas.php';
    break;
}