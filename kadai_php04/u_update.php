<?php
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];
$id = $_POST["id"];



session_start();


require_once('funcs.php');//?関数の読み込み
$pdo = db_conn();

//1. POSTデータ取得


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE
 gs_user_table SET name = :name,lid = :lid,lpw = :lpw,kanri_flg = :kanri_flg,life_flg = :life_flg
  WHERE id = :id;");
$stmt->bindValue(':name',$name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid',$lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg',$kanri_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg',$life_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect('u_select.php');

}
?>