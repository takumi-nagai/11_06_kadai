<?php

// 0. SESSION開始！！
session_start();


include("funcs.php");
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    sql_error($status);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<tr>';
    $view .= '<td><a href="u_detail.php?id='.$result["id"].'">'.$result["name"]. '</a></td>';
    $view .= '<td>'.$result["lid"].'</td>';
    $view .= '<td>'.$result["pw"].'</td>';
    $view .= '<td>'.$result["kanri_flg"].'</td>';
    $view .= '<td>'.$result["life_flg"].'</td>';
    $view .= '<td><a href="u_confirm.php?id='.$result["id"].'"><button>[削除]</button></a></td>';
    $view .= '</tr>';
    $view .= '</p>';
  }
}

?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーザ一覧</title>
<link href="css/stylesheet2.css" rel="stylesheet">
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <div class="t1"><a href="index.html">TOP画面</a></div>
  </div>
  <div class="t1"><a class="navbar-brand" href="u_index.php">ユーザ登録</a></div>
  </div>
  <div class="t1"><a href="logout.php">ログアウト</a></div>
  </div>

  
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
