<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
<?php
$num1 = 320;
$num2 = $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num1 = 18;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2;
?>
</p>

</body>
</html>