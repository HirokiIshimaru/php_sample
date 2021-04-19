<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
try{
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','root', ''); 
}catch(PDOException $e){
    echo 'DB接続エラー:' . $e->message();
}
?>
</pre>
</main>
</body>    
</html>