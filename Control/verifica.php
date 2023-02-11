<?php

function verificaStatus($status){
    $status == 0 ? $statusResp = '<b style="color:red;"> (PENDENTE) </b>' : $statusResp = '<b style="color:green;"> (CONCLUIDO) </b>';
    return $statusResp;
}