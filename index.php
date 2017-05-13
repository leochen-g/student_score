<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="Style/style.css" rel="stylesheet" type="text/css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>学生成绩管理系统</title>
</head>
<script language="javascript">
	function tosubmit1() {
		document.form1.action = "student_login.php";
		documenr.form1.submit();
	}

	function tosubmit2() {

		document.form1.action = "admin_login.php";
		document.form1.submit();
	}
</script>

<body>
	<div>
		<form name="form1" method="post">
			<table width="1003" height="600" border="0" align="center">
				<tr>
					<td style="text-align: center"><img src="pic/logo.png" alt="" style="margin: 20px auto;width: 260px;height: 220px"></td>
				</tr>
				<tr>
					<td style="text-align: center"><h2 style="font-size: 18px">合肥师范学院计算机等级考试成绩查询系统</h2></td>
				</tr>
				<tr>
					<td style="text-align: center"><p style="font-size: 12px;color:red;">学生登录用户名,请使用身份证号，密码为前6位</p></td>
				</tr>
				<tr>
					<td>
						<table width="298" height="120" border="0" align="center">
							<tr>
								<td width="90"><strong>用户名</strong>：</td>
								<td colspan="2"><label>
          <input type="text" name=name />
        </label>
								
								</td>
							</tr>
							<tr>
								<td><strong>密码</strong>：</td>
								<td colspan="2"><label>
          <input type=password name=password />
        </label>
								</td>
							</tr>
							
						</table>
						<table width="298" height="120" border="0" align="center">
							<tr>
								<td class="submit"><input name="submit1" type="submit" value="学 生" onclick="tosubmit1() "/>
								</td>
								<td width="80" class="submit"><input name="submit2" type="submit" onclick="tosubmit2()" value="管理员"/>
								</td>
								<td width="114" class="submit"><input name="Submit3" type="reset" class="btn_grey" value="重 置"/>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="footer" style="text-align: center">
    <p>Copyright &copy; 2017 版权所有</p>
</div>
</body>

</html>