<html>
<meta charset="utf-8">
<h2>
File include<br />
</h2>
『文档资料在线预览』<br />
<br />
<body style="background-image:url(upload/bg.png);background-size:100%;background-repeat:no-repeat;font-family:verdana;">
<a href="./08fileinclude.php?file=1.txt">帮助文档</a><br />

<?php
if(isset($_GET['file']))
{
$file = $_GET['file'];
echo "文件名：".$file."<br />";
echo "内容：";
include($file);
echo "<br />";
}
?>

</html>
