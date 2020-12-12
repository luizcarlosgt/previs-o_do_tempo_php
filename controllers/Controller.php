<?php
include "../models/ConnectApi.php";

function getDadosApi(){
    $p = new ConnectApi();
    return $p->getDados();
}