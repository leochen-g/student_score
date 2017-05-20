<?php
session_start();
include("pagelist2.php");
if($sid){
	include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where sid = '".$sid."'";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
		$grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where sid = '".$sid."' limit $select_from $select_limit";
	if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
		echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
		
}else if($sname){
	    include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where sname = '".$sname."'";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
		$grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where sname = '".$sname."' limit $select_from $select_limit";
		if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
			echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
		
}else if($sschool){
	    include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where sid = any(select sid from student where sschool = '".$sschool."')";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
	    $grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where sid = any(select sid from student where sschool = '".$sschool."') limit $select_from $select_limit";
		if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
			echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
}else if($sdept){
	include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where sid = any(select sid from student where sdept = '".$sdept."')";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
		$grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where sid = any(select sid from student where sdept = '".$sdept."') limit $select_from $select_limit";
		if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
			echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
}else if($sclass){
	include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where sid = any(select sid from student where sclass = '".$sclass."' )";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
		$grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where sid = any(select sid from student where sclass = '".$sclass."' ) limit $select_from $select_limit";
		if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
			echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
}else if($cdate){
	include("connect.php");
		//if($condition=="")	
		$sql = "select * from grade where cdate = '".$cdate."'";
		$result = mysql_query( $sql, $conn )or die( '查不到' );
		$grow = mysql_num_rows($result);
		Page($grow,10);
		$gsql = "select * from grade where cdate = '".$cdate."' limit $select_from $select_limit";
		if($grow){
		$rst = mysql_query($gsql);
	}else{
		echo "<script> alert('数据库不存在信息！');</script>";
			echo "<script> window.location='admin_result.php';</script>";
	exit;
	}
}
//else{
//	echo "<script> alert('请输入查询条件！');</script>";
//	echo "<script> window.location='admin_result.php';</script>";
//	exit;
//}
//if(!$sid )
//{
//   echo "<script> alert('请输入身份证号！');</script>";
//   echo "<script> window.location='admin_result.php';</script>";
//}
//include("connect.php");
////if($condition=="")	
//$sql = "select * from grade where sid = '".$sid."'";
//$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" href="Style/style.css">
</head>
<script language="javascript">
	function tosubmit1() {
		document.form1.action = "search_grade.php?page=1";
		documenr.form1.submit();
	}

	function tosubmit2() {
		document.form1.action = "search_student.php";
		document.form1.submit();
	}
</script>

<body >
<?php
	include("header.php");
	?>
	<div class="main-content">
	<form name="form1" method="get">
			<div class="content">
				<div class="content-name">
					<h2>查询学生成绩</h2>
				</div>
				<table width="1000"  border="0" align="center">
				
					<tr>
						<td >身份证号：</td>
						<td >姓名：</td>
						<td >学院：</td>
						<td >专业：</td>
						<td >班级：</td>
						<td >考试批次：</td>
					</tr>
					<tr>
						<td >
							<input type="text" name="sid"/> 
						</td>
						<td >
							<input type="text" name="sname"/> 
						</td>
						<td>
							<select name="school" id="typeId">
							<option value=""> </option>
								<?php
								$conn = mysql_connect( "localhost:3306", "root", "root" )or die( '连接数据库失败' );
								$selected = mysql_select_db( "studentscore", $conn )or die( '连接数据库失败!!' );
								mysql_query( "SET NAMES 'gb2312'" );
								$sql = mysql_query( "select * from school" );
								$info = mysql_fetch_array( $sql );
								do {
									?>
								<option value="<?php echo $info['sschool'];?>">
									<?php echo $info['sschool'];  ?>
								</option>
								<?php }while($info=mysql_fetch_array($sql));?>
							</select>
						</td>
						<td>
							<select name="sdept">
							<option value=""> </option>
								<?php
								$school = $_POST[ 'school' ];
								$sql1 = mysql_query( "select * from sdept" );
								$info1 = mysql_fetch_array( $sql1 );
								do {
									?>
								<option value="<?php echo $info1['sdept'];?>">
									<?php echo $info1['sdept'];?>
								</option>
								<?php }while($info1=mysql_fetch_array($sql1));?>
							</select>
						</td>
						<td>
							<select name="sclass">
							<option value=""> </option>
								<?php
								$sql2 = mysql_query( "select * from class" );
								$info2 = mysql_fetch_array( $sql2 );
								do {
									?>
								<option value="<?php echo $info2['sclass'];?>">
									<?php echo $info2['sclass'];?>
								</option>
								<?php }while($info2=mysql_fetch_array($sql2));?>
							</select>
						</td>
						<td>
							<select name="cdate">
							<option value=""> </option>
								<option value="201603">201603</option>
								<option value="201609">201609</option>
								<option value="201612">201612</option>
								<option value="201703">201703</option>
								<option value="201709">201709</option>
								<option value="201712">201712</option>
							</select>
						</td>
					</tr>
					<tr>
						<td> <h2>查询内容：</h2></td>
						<td>
							<input name="submit1" type="submit" value="成绩" onclick="tosubmit1()"/>
							<input name="submit2" type="submit" value="学生信息" onclick="tosubmit2()"/>
							
						</td>
					</tr>
				</table>
			</div>
		</form>
	<div class="search_tip">查询结果</div>
		<table class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td width="110" height="28" >身份证号</td>
				<td width="60"   >姓名</td>
				<td width="80"   >课程编号</td>
				<td width="180"   >科目</td>
				<td width="60"   >等级</td>
				<td width="60"   >分数</td>
				<td width="80"   >考试日期</td>
				<td width="67"   >&nbsp;</td>
				<td width="66"   >&nbsp;</td>
			</tr>
			<?php 
	    while($row=mysql_fetch_array($rst)){
	?>
			<tr>
				<td   >
					<?php echo stripslashes($row['sid']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['sname']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['cid']);?>
				</td>
				<?php
				$_SESSION[ 'changcid' ] = $row[ 'cid' ];
				?>
				<td   >
					<?php echo stripslashes($row['cname']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['ccredit']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['sgrade']); ?>
				</td>
				<td   >
					<?php echo stripslashes($row['cdate']); ?>
				</td>
				<td   ><a href="delete_grade.php">删除</a>
				</td>
				<td   ><a href="change_grade.php">修改</a>
				</td>
			</tr>
			<?php
			}
			$_SESSION[ 'deletesid' ] = $sid;
			//$_SESSION['changcid']=$cid;
			?>
		</table>
	<div class="nav"><?php echo $pagenav; ?></div>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>