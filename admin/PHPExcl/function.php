<?
//导入Excel文件
function uploadFile($file,$filetempname) 
{
	//自己设置的上传文件存放路径
	$filePath = 'upFile/';
	$str = "";
	//下面的路径按照你PHPExcel的路径来修改
	set_include_path('.'. PATH_SEPARATOR .'D:\phpStudy\WWW\student_score\admin\PHPExcl\PHPExcel' . PATH_SEPARATOR .get_include_path()); 
      
	require_once 'PHPExcel.php';
	require_once 'PHPExcel\IOFactory.php';
	//require_once 'PHPExcel\Reader\Excel5.php';//excel 2003
	require_once 'PHPExcel\Reader\Excel2007.php';//excel 2007

	$filename=explode(".",$file);//把上传的文件名以“.”好为准做一个数组。 
	$time=date("y-m-d-H-i-s");//去当前上传的时间 
	$filename[0]=$time;//取文件名t替换 
	$name=implode(".",$filename); //上传后的文件名 
	$uploadfile=$filePath.$name;//上传后的文件名地址 

  
	//move_uploaded_file() 函数将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。
    $result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下
    if($result) //如果上传文件成功，就执行导入excel操作
    {
	   //$objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2003
	   $objReader = PHPExcel_IOFactory::createReader('Excel2007');//use excel2003 和 2007 format
	   //$objPHPExcel = $objReader->load($uploadfile); //这个容易造成httpd崩溃
	   $objPHPExcel = PHPExcel_IOFactory::load($uploadfile);//改成这个写法就好了

	   $sheet = $objPHPExcel->getSheet(0); 
	   $highestRow = $sheet->getHighestRow(); // 取得总行数 
	   $highestColumn = $sheet->getHighestColumn(); // 取得总列数
    
		//循环读取excel文件,读取一条,插入一条
		for($j=2;$j<=$highestRow;$j++)
		{ 
			for($k='A';$k<=$highestColumn;$k++)
			{ 
				$str .= iconv('utf-8','gbk',$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';//读取单元格
			} 
			//explode:函数把字符串分割为数组。
			$strs = explode("\\",$str);
			
			//var_dump($strs);
			//die();
			$sql = "INSERT  INTO  student(sid,sname,sage,ssex,sdept,sschool,sclass,spassword) VALUES('".$strs[0]."','".$strs[1]."','".$strs[2]."','".$strs[3]."','".$strs[4]."','".$strs[5]."','".$strs[6]."','".$strs[7]."')";
			//$sql = "INSERT INTO grade(sid,sname,cid,cname,sgrade,cdate,ccredit) VALUES('".$strs[0]."','".$strs[1]."','".$strs[8]."','".$strs[9]."','".$strs[11]."','".$strs[12]."','".$strs[10]."')";
			//$sql = "INSERT INTO certificate(sid,sname,cid,cname,estate,enum,etype,ccredit) VALUES('".$strs[0]."','".$strs[1]."','".$strs[8]."','".$strs[9]."','".$strs[13]."','".$strs[14]."','".$strs[15]."','".$strs[10]."')";
			
			//echo $sql;
			mysql_query("set names gb2312");//这就是指定数据库字符集，一般放在连接数据库后面就系了 
			if(!mysql_query($sql)){
				return false;
			}
			$str = "";
	   } 
   
   	   unlink($uploadfile); //删除上传的excel文件
       $msg = "导入成功！";
		echo "<script> alert('导入成功！');</script>";
	   echo "<script> window.location='../upfile.php';</script>";
    }else{
       $msg = "导入失败！";
		echo "<script> alert('导入失败！');</script>";
		echo "<script> window.location='../upfile.php';</script>";
    }
    return $msg;
}
?>