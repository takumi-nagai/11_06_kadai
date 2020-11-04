<?php


//1.  DB接続します
include("funcs.php");

$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
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

    $view .= '<p><a href="bm_detail.php?id='.$result["id"].'">'.$result["indate"]. '</a></p>';
    $view .= '<p>'. $result["b_url"].'</p>';
    $view .= '<p>'.$result["book"].'</p>';
    $view .= '<p>'.$result["coment"].'<p>';

  }
}
?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お気に入り一覧</title>
<link href="css/stylesheet2.css" rel="stylesheet">
</head>
<body id="main">
<!-- Head[Start] -->
<header>
　<div class="t1"><a href="index.html">TOP画面</a></div>
  </div>

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
