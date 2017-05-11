<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>计算机等级考试科目管理</title>
<link rel="stylesheet" href="Style/style.css">
</head>
<body >
<?php
	include("header.php");
	?>
<div class="main-content">
  <form action="insert_course.php" method="post">
    <div class="content">
      <div class="content-name">
        <h2>科目管理</h2>
      </div>
      <table width="431" height="340" border="0" align="center">
        <tr>
          <td width="40">科目编号：</td>
          <td width="150"><input type="text" name="cid" /></td>
        </tr>
        <tr>
          <td>科目名称：</td>
          <td><input type="text" name="cname" /></td>
        </tr>
        <tr>
          <td>等级：</td>
          <td><input type="text" name="ccredit"  /></td>
        </tr>
        <tr>
          <td><input type="submit" value="添加" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
  </form>
</div>
<?php
	include("footer.php");
	?>
</body>
</html>
