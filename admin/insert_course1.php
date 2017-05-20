<?php
session_start();
include("pagelist.php");
include("connect.php");
$rows = mysql_num_rows(mysql_query("select * from course")); 
Page($rows,10);
$sql = "select * from course limit $select_from $select_limit";
$rst = mysql_query($sql); 
//$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
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
      <table width="1000"  border="0" align="center">
        <tr>
          <td >科目编号：</td>
          <td width="150"><input type="text" name="cid" /></td>
          <td>科目名称：</td>
          <td><input type="text" name="cname" /></td>
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
  <form name="form1" method="post">
			<div class="content">
				<table  class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td width="300" height="28">科目编号</td>
						<td width="300">科目</td>
						<td width="300">等级</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($rst)){
	?>
					<tr>
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['ccredit']); ?>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
		</form>
  		<div class="nav"><?php echo $pagenav; ?></div>
</div>
<?php
	include("footer.php");
	?>
</body>
</html>
