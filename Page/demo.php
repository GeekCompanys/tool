<?php
include 'Page.php';//引入分页类
$page = new Page(123);//实例化分页类，参数为总记录条数
$page->pagesize = 20;
$page->bothnum = 2;
echo $page->limit;
echo $page->showpage(); //调用
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分页demo</title>
	<style>
		a,span{
			color: #999;
			text-decoration: none;
			display: inline-block;
			padding: 0 10px;
			margin: 0 6px;
			border-radius: 3px;
			height: 26px;
			line-height: 26px;
			border: 1px solid #666;
		}
		span{
			border: none;
		}
	</style>
</head>
<body>

</body>
</html>
