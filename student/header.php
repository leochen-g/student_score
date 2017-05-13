<div class="header">
		<div class="banner">
			<div id="logo">
				<a>
                    <img src="pic/logo_school.png" alt="" width="210" height="48" />
            </a>
			
				<div class="title">
					<h2>合肥师范学院计算机等级考试成绩查询系统</h2>
				</div>
			</div>
		</div>
		<div style="width: 1178px;margin: 0 auto;text-align: left;padding-left: 20px;border-left: 1px solid black;border-right: 1px solid black">
			<span class="STYLE4">欢迎您：</span>
					<font color=red>
						<?php 
	$sql1 = "select * from student where sid = '".$sid."'";
    $result1 = mysql_query($sql1,$conn)or die('查不到');
	$row = mysql_fetch_array($result1);
	echo $row[1] ;
	?>
					</font>
					<font color="red">
						<?PHP
						date_default_timezone_set( "PRC" );
						echo date( "Y.m.d" );
						?>
					</font>
		</div>
		<div class="stu-menu">
			<ul>
				<li><a href="student_result.php">成绩查询</a>
				</li>
				<li><a href="changpwd1.php">报名查询</a>
				</li>
				<li><a href="changpwd1.php">证书查询</a>
				</li>
				<li><a href="changpwd1.php">基本信息</a>
				</li>
				<li><a href="changpwd1.php">修改密码</a>
				</li>
				<li><a href="../index.php">安全退出</a>
				</li>
			</ul>
		</div>
	</div>