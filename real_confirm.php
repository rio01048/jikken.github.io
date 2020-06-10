<?php
  session_start();
  $id = $_GET['id'];
  $pass = $_GET['pass'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>formsample</title>
    <link rel="stylesheet" type="text/css" href="index_real_confirm.css" media="all" />
</head>
<body>
<div id="form">
    <p class="form-title">このIDとpasswordで正しいですか？</p>
    <form action="real_regist.php" method = "get">
<?php
print("ID:$id<br>");
print("password:$pass<br>");
 ?>
        <p class="submit"><input type="submit" value="登録" /></p>
        <input type="button" value="戻る" onclick="javascript:history.back();">
    </form>
</div>
</body>
</html>
