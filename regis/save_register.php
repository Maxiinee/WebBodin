<?php
$servername = "localhost";
$username = "Bodin";
$password = "1234";
$dbname = "testdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	if($_POST["F_password"] != $_POST["F_Cpassword"]){// echo if password not match 
			echo "<script> alert('รหัสผ่านไม่ตรงกัน กรุณาตั้งรหัสผ่านให้ตรงกัน!'); 
					window.location.href='Form_Register.php';
				</script>";
	}
	else{
		$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['F_username'])."' ";
		$objQuery = mysqli_query($conn,$strSQL);//mysql_query($strSQL);
		$objResult = mysqli_fetch_array($objQuery);

		if($objResult){//echo Username already exists!
					echo "<script> alert('มีชื่อผู้ใช้งานนี้แล้ว กรุณาตั้งชื่อผู้ใช้งานใหม่!'); 
						window.location.href='Form_Register.php';
					</script>";
					
		}
		else
			{	
				
				$strSQL = "INSERT INTO member (Username,Password,Type,Name,Email,Tel,Lineid,Address) VALUES ('".$_POST["F_username"]."','".$_POST["F_password"]."','".$_POST["F_Status"]."','".$_POST["F_name"]."','".$_POST["F_email"]."' ,'".$_POST["F_phone"]."' ,'".$_POST["F_LineID"]."' ,'".$_POST["F_address"]."' ) ";
				
				$objQuery = mysqli_query($conn,$strSQL);
				if($objQuery){
					mysqli_close($conn);
					echo "<script> alert('สมัครสมาชิกสำเร็จ!'); 
						window.location.href='index.html';
					</script>";
				}
			
				
			}
	}		
}
?>
