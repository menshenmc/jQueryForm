<?php
		
		if($_POST){
			$str = "用户名：".$_POST['uname']."，密码：".$_POST['password'];
			if($_FILES['file']){
				$str .= "，上传文件名：".$_FILES['file']['name'];
			}
		}
		
		echo $str;






































?>