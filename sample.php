<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>サンプル</title>
</head>
<body>
<h1>ボタンによって実行する処理を変化させる</h1>
<!--フォーム-->
<form action="sample.php" method="post">
  <input type="submit" name="submit" value="送信">
  <input type="submit" name="delete" value="削除"> 
</form>
<!--ボタン押下後の処理-->
<?php
  if(isset($_POST['submit'])) {
    echo "送信ボタンを押下！！";
  }
  else if(isset($_POST['delete'])) {
    echo "削除ボタンを押下！！";
  }   
?>
</body>
</html>