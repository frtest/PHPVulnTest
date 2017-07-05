<html>
<meta charset="utf-8">
<h2>
Reflected xss<br />
</h2>
<body style="background-image:url(upload/bg.png);background-size:100%;background-repeat:no-repeat;font-family:verdana;">
输入关键字，查询您想要的页面.<br />
<br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" name="s" value="">
<input type="submit" name="submit" value="查询">
</form>
<?php
//$s = @$_POST['s'];
if(isset($_POST['s']))
{
$s = @$_POST['s'];
$html  = "抱歉，未查询到与";
$html .=  $s;
$html .=  "相关的页面，请重试.";
echo $html;
}
?>
</html>
