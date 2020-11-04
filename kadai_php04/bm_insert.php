<?php
session_start();
include('funcs.php');




//1. POSTデータ取得
$book = $_POST["book"];
$b_url = $_POST["b_url"];
$coment = $_POST["coment"];

$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id,book,b_url,coment,indate)VALUES(NULL,:book,:b_url,:coment,sysdate())");
$stmt->bindValue(':book',$book, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':b_url',$b_url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':coment', $coment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: bm_select.php?");

}
?>
