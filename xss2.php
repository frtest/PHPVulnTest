<html>
<meta charset="utf-8">
<h2>
Restored xss<br />
</h2>
简易留言板<br />
<br />
<body style="background-image:url(upload/bg.png);background-size:100%;background-repeat:no-repeat;font-family:verdana;">
<script type="text/javascript">
function checkPost(){

if(addForm.user.value==""){
alert("请输入用户名");
addForm.user.focus();
return false;
}
if(addForm.title.value==""){
alert("请输入标题");
addForm.title.focus();
return false;
}
if(addForm.liuyan.value==""){
alert("请输入留言内容");
addForm.liuyan.focus();
return false;
}
}
</script> 
<form name="addForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return checkPost();">
用户：<INPUT TYPE="text" NAME="user" /><br />
标题：<INPUT TYPE="text" NAME="title" /><br /> 
内容：<textarea cols="30" rows="10" name="liuyan"></textarea>
<input type="submit" name="submit" value="提交">
</form>
<?php
@include('conn.php');
$result = mysql_query("SELECT count(*) FROM liuyan;");
if($result)
{
	list($id) = mysql_fetch_row($result);
}
$contents = mysql_real_escape_string(@$_POST['liuyan']);
$name     = mysql_real_escape_string(@$_POST['user']);
$title    = mysql_real_escape_string(@$_POST['title']);

$id = $id + 1;
if($_POST['submit'])
{
mysql_query("INSERT INTO liuyan (id,text,name,title) values ($id,'$contents','$name','$title');");
}

?>

点击这里查看留言板历史记录：<br />
<a href="./03xss2-liuyan.php">查看留言
</html>
