<?php
session_start();
include('funcs.php');
session_check();//?関数の読み込み

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ登録</title>
  <link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->
<header class="head1">
  <div class="t1"><a href="index.html">TOP画面</a></div>
  </div>
  <div class="t1"><a href="u_select.php">データ一覧</a></div>
  </div>
  <div class="t1"><a href="logout.php">ログアウト</a></div>
  </div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="u_insert.php">
  <div class="jumbotron">

<h3>ユーザ情報【登録フォーム】</h3>
    <table border="0">
    <tr>
      <td class="td1">氏名:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="td1">ID:</td>
      <td><input type="text" name="lid"></td>
    </tr>
    <tr>
      <td class="td1">パスワード:</td>
      <td><input type="text" name="lpw"></td>
    </tr>
    <tr>
      <td class="td1">ユーザ区分:</td>
      <td><input type="hidden" name="kanri_flg" value=0><input type="checkbox" name="kanri_flg" value=1>管理者はチェックしてね</td>
    </tr>
    <tr>
      <td class="td1">在籍状況:</td>
      <td><input type="hidden" name="life_flg" value=0><input type="checkbox" name="life_flg" value=1>退職者はチェックしてね</td>
    </tr>
</table>

<input type="submit" value="登録">
    

  </div>
</form>
<!-- Main[End] -->


</body>
</html>
