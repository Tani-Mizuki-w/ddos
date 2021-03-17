<html>
<head>
  <title>
    タニタに文字数カウント
  </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<p>タニタに文字数カウント</p>
<p>文字数をカウントすることができます</p>
<form method="POST" action="./count.php">
name:<input type="text" name="count" ><br>
<input type="submit">
</form>




<?php

if (isset($_POST['count'])){$count=$_POST['count'];}
echo "文字数は、".mb_strlen($count);


$dbconn = pg_connect("host=localhost dbname=tani user=tani password=tfCKUFGk")
or die('Could not connect: ' . pg_last_error());

//$sql="insert into count(count) values
//('" .$count . "');";

 ?>

<!--
create table count(
  id serial primary key,
  count text not null
  ) without oids;
-->
</body>
</html>
