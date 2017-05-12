<?
include("conn.php");
include("function.php"); 

if($_POST['import']=="导入基本信息"){

	$leadExcel=$_POST['leadExcel'];
	
	if($leadExcel == "true")
	{
		//echo "OK";die();
		//获取上传的文件名
		//$filename = $HTTP_POST_FILES['inputExcel']['name'];
			$filename = $_FILES["inputExcel"]["name"];
		//上传到服务器上的临时文件名
		$tmp_name = $_FILES['inputExcel']['tmp_name'];
		
		$msg = uploadFile($filename,$tmp_name);
		echo $msg;
	}
}else if($_POST['import']=="导入成绩"){
	
	$leadExcel=$_POST['leadExcel'];
	
	if($leadExcel == "true")
	{
		//echo "OK";die();
		//获取上传的文件名
		//$filename = $HTTP_POST_FILES['inputExcel']['name'];
			$filename = $_FILES["inputExcel"]["name"];
		//上传到服务器上的临时文件名
		$tmp_name = $_FILES['inputExcel']['tmp_name'];
		
		$msg = uploadFile_grade($filename,$tmp_name);
		echo $msg;
	}
}
?>