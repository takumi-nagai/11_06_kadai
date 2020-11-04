<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylesheet.css" rel="stylesheet">
    <title>ログイン</title>
</head>
<body>
    <div class="form-wrapper">
    <h1>Sign In</h1>
    <form name="form1" action="u_login_act.php" method="post">
        <div class="form-item">
        <label for="ID"></label>
        <input type="text" name="lid" required="required" placeholder="ID"></input>
        </div>
        <div class="form-item">
        <label for="password"></label>
        <input type="password" name="lpw" required="required" placeholder="Password"></input>
        </div>
        <div class="button-panel">
        <input type="submit" class="button" title="Sign In" value="Sign In(user)"></input>
        </div>

    </form>
    <div class="form-footer">
        <p><a href="u_index.php">Create an account</a></p>
</body>
</html>


    
  </div>
</div>
