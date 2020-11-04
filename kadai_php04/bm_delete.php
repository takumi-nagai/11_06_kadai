<?php
session_start();

//1.  DB接続します
include("funcs.php");
session_check();

$id = $_GET['id'];

$pdo = db_conn();

$stmt = $pdo->prepare('DELETE FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', h($id), PDO::PARAM_INT); 
$status = $stmt->execute(); 

if($status==false){
    sql_error($stmt);
}else{
    redirect('bm_select.php');
}
?>