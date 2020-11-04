<?php
session_start();


$id = $_GET["id"]; //?id~**を受け取る

include("funcs.php");//?関数ファイルの読み込み
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=". $id);
$status = $stmt->execute();


//３．データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>更新</title>
    <link href="css/stylesheet.css" rel="stylesheet">
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
    
            <?= $view ?>

<!-- Main[Start] -->
<form method="POST" action="u_update.php">
  <div class="jumbotron">
    <fieldset>
        <legend>ユーザ【更新】情報</legend>
            <p>氏名<input type="text" name="name" value=<?= $result['name'] ?>></p>
            <p>ID<input type="text" name="lid" value=<?= $result['lid'] ?>></p>
            <p>パスワード<input type="text" name="lpw" value=<?= $result['lpw'] ?>></p>
            <p>ユーザ区分<input type="hidden" name="kanri_flg" value=0><input type="checkbox" name="kanri_flg" value = 1></p>
            <p>在籍状況<input type="hidden" name="life_flg" value=0><input type="checkbox" name="life_flg" value = 1></p>
            <input type="hidden" name="id" value= <?= $result['id'] ?>>
            <input type="submit" value="更新">
   </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>

</html>
<!-- 
 -->