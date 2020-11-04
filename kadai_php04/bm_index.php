<?php
session_start();
include('funcs.php');
session_check();//?関数の読み込み
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->
<header class="head1">
<div class="t1"><a href="index.html">TOP画面</a></div>
  </div>
  <div class="t1"><a class="navbar-brand" href="bm_select.php">本の一覧</a></div>
  </div>
  <div class="t1"><a href="logout.php">ログアウト</a></div>
  </div>

</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="bm_insert.php">
  <div class="jumbotron">

<h3>お気にいりの本【登録フォーム】</h3>
    <table border="0">
    <tr>
      <td class="td1">書籍名:</td>
      <td><input type="text" name="book"></td>
    </tr>
    <tr>
      <td class="td1">書籍URL:</td>
      <td><input type="text" name="b_url"></td>
    </tr>
    <tr>
      <td class="td1">書籍コメント:</td>
      <td><textArea name="coment" rows="3" cols="30"></textArea></td><br>
    </tr>
</table>

<button><input type="submit" value="登録"></button>
    

  </div>
</form>
<!-- Main[End] -->


</body>
</html>
