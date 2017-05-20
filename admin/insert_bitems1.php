<?php
session_start();
include("pagelist.php");
include("connect.php");
$rows = mysql_num_rows(mysql_query("select * from bitems")); 
Page($rows,10);
$sql = "select * from bitems limit $select_from $select_limit";
$rst = mysql_query($sql); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<title>计算机等级考试科目管理</title>
<link rel="stylesheet" href="Style/style.css">
</head>
<body >
<?php
	include("header.php");
	?>
<div class="main-content">
  <form action="insert_bitems.php" method="post">
    <div class="content">
      <div class="content-name">
        <h2>考试管理</h2>
      </div>
      <table width="1000"  border="0" align="center">
        <tr>
          <td>考试编号：</td>
          <td>科目编号：</td>
          <td>科目名称：</td>
          <td>等级：</td>
          <td>报名开始时间：</td>
          <td>报名结束时间：</td>
          <td>状态：</td>
        </tr>
        <tr>
        	<td ><input type="text" name="bid" /></td>
        	<td>
        	<select name="cid" id="cid">
								<?php
								$conn = mysql_connect( "localhost:3306", "root", "root" )or die( '连接数据库失败' );
								$selected = mysql_select_db( "studentscore", $conn )or die( '连接数据库失败!!' );
								mysql_query( "SET NAMES 'gb2312'" );
								$sql = mysql_query( "select * from course" );
								$info = mysql_fetch_array( $sql );
								do {
									?>
								<option value="<?php echo $info['cid'];?>">
									<?php echo $info['cid'];  ?>
								</option>
								<?php }while($info=mysql_fetch_array($sql));?>
							</select>
       	</td>
        	<td>
        	<select name="cname" >
								<?php
								$cid = $_POST[ 'cid' ];
								$sql1 = mysql_query( "select * from course" );
								$info1 = mysql_fetch_array( $sql1 );
								do {
									?>
								<option value="<?php echo $info1['cname'];?>">
									<?php echo $info1['cname'];?>
								</option>
								<?php }while($info1=mysql_fetch_array($sql1));?>
			</select>
        	</td>
        	<td>
        	<select name="ccredit" >
								<?php
								$sql2 = mysql_query( "select * from course" );
								$info2 = mysql_fetch_array( $sql2 );
								do {
									?>
								<option value="<?php echo $info2['ccredit'];?>">
									<?php echo $info2['ccredit'];?>
								</option>
								<?php }while($info2=mysql_fetch_array($sql2));?>
							</select></td>
        	<td><input type="date" name="start_time"  /></td>
        	<td><input type="date" name="finish_time"  /></td>
        	<td>
				<select name="status">
					<option value="开启">开启</option>
					<option value="关闭">关闭</option>
				</select>
			</td>
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
          				<td>考试编号：</td>
          				<td>科目编号：</td>
          				<td>科目名称：</td>
          				<td>等级：</td>
          				<td>报名开始时间：</td>
          				<td>报名结束时间：</td>
          				<td>状态：</td>
        			</tr>
					<?php 
	    while($row=mysql_fetch_array($rst)){
	?>
					<tr>
						<td>
							<?php echo stripslashes($row['bid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['ccredit']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['start_time']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['finish_time']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['status']); ?>
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
