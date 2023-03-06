<?php
class TarefaModel{
    
    function insert($tituloTarefa,$descTarefa){
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

}