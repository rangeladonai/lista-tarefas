<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    switch($_GET['action']){
        case 'insertTarefa':
            insertTarefa($_POST['titulo'],$_POST['desc']);
        break;
    }
}


function verificaStatus($status){
    $status == 0 ? $statusResp = '<b style="color:red;"> (PENDENTE) </b>' : $statusResp = '<b style="color:green;"> (CONCLUIDO) </b>';
    return $statusResp;
}

function insertTarefa($tituloTarefa,$descTarefa){
    include '../Database/connection.php';
    $sql = 'INSERT INTO tarefa(titulo,descricao,status_tarefa)VALUES(:t,:d,0)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':t',$tituloTarefa);
    $stmt->bindParam(':d',$descTarefa);   
    try{
        $stmt->execute();
        header('Location:/tarefas');
        echo "$('#salvo').show";
    }catch(PDOException $e){
        echo $e->getMessage();
    }

}