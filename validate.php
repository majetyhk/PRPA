<?PHP
include('db.php');
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

$t1 = $fgmembersite->UserFullName();

$sql1 = "select * from qualifications where user_key='$t1'";
$result1=mysql_query($sql1) or die(mysql_error());
if(!$result1||mysql_num_rows($result1)<1){//echo 'empty result';
}
else
while($row = mysql_fetch_array($result1))
{
	$univ_10 = $row['10_univ'];
	$univ_12 = $row['12_univ'];
	$univ_bd = $row['bd_univ'];
	$univ_pg = $row['pg_univ'];
	$univ_o = $row['o_univ'];
	$degree_10 = $row['10_degree'];
	$degree_12 = $row['12_degree'];
	$degree_bd = $row['bd_degree'];
	$degree_pg = $row['pg_degree'];
	$degree_o = $row['o_degree'];
	$marks_10 = $row['10_marks'];
	$marks_12 = $row['12_marks'];
	$marks_bd = $row['bd_marks'];
	$marks_pg = $row['pg_marks'];
	$marks_o = $row['o_marks'];
	$grade_10 = $row['10_grade'];
	$grade_12 = $row['12_grade'];
	$grade_bd = $row['bd_grade'];
	$grade_pg = $row['pg_grade'];
	$grade_o = $row['o_grade'];
	$year_10 = $row['10_year'];
	$year_12 = $row['12_year'];
	$year_bd = $row['bd_year'];
	$year_pg = $row['pg_year'];
	$year_o = $row['o_year'];
	$bd_1 = $row['bd_1'];
	$bd_2 = $row['bd_2'];
	$bd_3 = $row['bd_3'];
	$bd_4 = $row['bd_4'];
	$bd_5 = $row['bd_5'];
	$bd_6 = $row['bd_6'];
	$bd_7 = $row['bd_7'];
	$bd_8 = $row['bd_8'];
	$bd_9 = $row['bd_9'];
	$bd_10 = $row['bd_10'];
	$md_1 = $row['md_1'];
	$md_2 = $row['md_2'];
	$md_3 = $row['md_3'];
	$md_4 = $row['md_4'];
	$md_agr = $row['md_agr'];
	$bd_agr = $row['bd_agr'];
	$md_class = $row['md_class'];
	$bd_class = $row['bd_class'];
}	
		
$sql2 = "select * from experience where user_ex='$t1'";

$result2=mysql_query($sql2) or die(mysql_error());
if(!$result2||mysql_num_rows($result2)<1){
      //echo 'empty result';
}
else
{
	while($row = mysql_fetch_array($result2))
  	{
		$org_1 = $row['org_1'];
		$org_2 = $row['org_2'];
		$org_3 = $row['org_3'];
		$org_4 = $row['org_4'];
		$org_5 = $row['org_5'];
		$des_1 = $row['des_1'];
		$des_2 = $row['des_2'];
		$des_3 = $row['des_3'];
		$des_4 = $row['des_4'];
		$des_5 = $row['des_5'];
		$per_1 = $row['per_1'];
		$per_2 = $row['per_2'];
		$per_3 = $row['per_3'];
		$per_4 = $row['per_4'];
		$per_5 = $row['per_5'];
		$work_1 = $row['work_1'];
		$work_2 = $row['work_2'];
		$work_3 = $row['work_3'];
		$work_4 = $row['work_4'];
		$work_5 = $row['work_5'];
	}	
}
	
		
$sql3 = "select * from personal_info where user_name='$t1'";

$result3=mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($result3))
{
	$Full_Name = $row['Full_Name'];
	$gender = $row['gender'];
	$dob = $row['dob'];
	$fname = $row['fname'];
	$nation=$row['Nationality'];
	$marital=$row['Marital_status'];
	$pc=$row['Physically_challenged'];
	$com=$row['community'];
	$minority=$row['Minority'];
	$pemail = $row['pemail'];
	$aemail = $row['aemail'];
	$Temp_Address = $row['Temp_Address'];
	$T_District = $row['T_District'];
	$T_pincode = $row['T_pincode'];
	$T_phone_number = $row['T_phone_number'];
	$T_mobile_number = $row['T_mobile_number'];
	$perm_Address = $row['perm_Address'];
	$P_District = $row['P_District'];
	$P_pincode = $row['P_pincode'];
	$P_phone_number = $row['P_phone_number'];
	$P_mobile_number = $row['P_mobile_number'];
	$tstate=$row['T_state'];
	$pstate=$row['P_state'];
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Validate</title>
	<?php

	if(!isset($Full_Name=="") || !isset($gender=="") || !isset($dob=='1970-01-01')  || !isset($fname=="")  || !isset($nation="") || !isset($marital=="") || !isset($pc=="") || !isset($com=="") || !isset($pemail=="")  || !isset($Temp_Address=="") || !isset($T_District=="") || !isset($tstate=="") || !isset($T_pincode=="")  ||!isset($perm_Address=="") || !isset($P_District=="") || !isset($pstate=="") || !isset($P_pincode==""))
	{
		echo '<a href="forms.php">Personal Information</a> not saved. Please save the information before you submit.';
		echo '</head> <body></body></html>'; 
		exit();
	}

	if(!isset($univ_10) || !isset($univ_12) || !isset($univ_bd) || !isset($univ_pg) || !isset($degree_10) || !isset($degree_12) || !isset($degree_bd) || !isset($degree_pg) || !isset($marks_10) || !isset($marks_12) || !isset($marks_bd) || !isset($marks_pg) || !isset($grade_10) || !isset($grade_12) || !isset($grade_bd) || !isset($grade_pg) || !isset($year_10) || !isset($year_12)|| !isset($year_bd)|| !isset($year_pg)||!isset($bd_2) ||!isset($bd_3) ||!isset($bd_4) ||!isset($bd_5) ||!isset($bd_6) ||!isset($bd_7) ||!isset($bd_8) ||!isset($bd_agr) || !isset($bd_class) || !isset($md_1) ||!isset($md_2) ||!isset($md_3) ||!isset($md_4) ||!isset($md_agr) || !isset($md_class))
	{
		/*echo "<script>
			alert('Errors in Academic Information');
			window.location.href='forms.php';
			</script>";*/
		echo '<a href="forms.php">Academic Information not saved. Please save the information before you submit.</a>';
		echo '</head> <body></body></html>';
		exit();
	}




	if($Full_Name=="" || $gender=="" || ($dob=='1970-01-01')  || $fname==""  || $nation="" || $marital=="" || $pc=="" || ($com=="") || ($pemail=="")  || ($Temp_Address=="") || ($T_District=="") || ($tstate=="") || ($T_pincode=="")  ||($perm_Address=="") || ($P_District=="") || ($pstate=="") || ($P_pincode==""))
	{
		    
			echo '<a href="forms.php">Some fields are empty in personal information. Make sure you have filled in all the required fields.</a>';
			echo '</head> <body></body></html>';
			/*echo "<script>
			alert('Errors in Personal Information');
			window.location.href='forms.php';
			</script>";*/
			//window.location.href='forms.php';
	}
	
	else if(($univ_10=="") || ($univ_12=="") || ($univ_bd=="") || ($univ_pg=="") || ($degree_10=="") || ($degree_12=="") || ($degree_bd=="") || ($degree_pg=="") || ($marks_10=="") || ($marks_12=="") || ($marks_bd=="") || ($marks_pg=="") || ($grade_10=="") || ($grade_12=="") || ($grade_bd=="") || ($grade_pg=="") || ($year_10=="") || ($year_12=="")|| ($year_bd=="")|| ($year_pg=="")||($bd_2=="") ||($bd_3=="") ||($bd_4=="") ||($bd_5=="") ||($bd_6=="") ||($bd_7=="") ||($bd_8=="") ||($bd_agr=="") || ($bd_class=="") || ($md_1=="") ||($md_2=="") ||($md_3=="") ||($md_4=="") ||($md_agr=="") || ($md_class==""))
	{
		    
			echo 'Some Fields are empty in <a href="forms.php">Academic Information</a>';
			echo '</head> <body></body></html>';
			//if(!isset($univ_pg)) echo 'crap';
			//window.location.href='forms.php';
			/*echo "<script>
			alert('Errors in Academic Information');
			window.location.href='forms.php';
			</script>";*/
	}


	


	/*if(isset($Full_Name) && isset($gender) && isset($dob)  && isset($fname) && isset($nation) && isset($marital) && isset($pc) && isset($com) && isset($pemail)  && isset($Temp_Address) && isset($T_District) && isset($tstate) && isset($T_pincode)  &&isset($perm_Address) && isset($P_District) && isset($pstate) && isset($P_pincode) && isset($univ_10) && isset($univ_12) && isset($univ_bd) && isset($univ_pg) && isset($degree_10) && isset($degree_12) && isset($degree_bd) && isset($degree_pg) && isset($marks_10) && isset($marks_12) && isset($marks_bd) && isset($marks_pg) && isset($grade_10) && isset($grade_12) && isset($grade_bd) && isset($grade_pg) && isset($year_10) && isset($year_12)&& isset($year_bd)&& isset($year_pg)&&isset($bd_2) &&isset($bd_3) &&isset($bd_4) &&isset($bd_5) &&isset($bd_6) &&isset($bd_7) &&isset($bd_8) &&isset($bd_agr) && isset($bd_class) && isset($md_1) &&isset($md_2) &&isset($md_3) &&isset($md_4) &&isset($md_agr) && isset($md_class))
	{
		echo "<script>
			alert('Some forms aren't saved. Please make sure you have saved all the forms.');
			window.location.href='forms.php';
			</script>";
	}*/
	else
	{
		if(($Full_Name!="") && ($gender!="") && ($dob!="")  && ($fname!="") && ($nation!="") && ($marital!="") && ($pc!="") && ($com!="") && ($pemail!="")  && ($Temp_Address!="") && ($T_District!="") && ($tstate!="") && ($T_pincode!="")  &&($perm_Address!="") && ($P_District!="") && ($pstate!="") && ($P_pincode!="") && ($univ_10!="") && ($univ_12!="") && ($univ_bd!="") && ($univ_pg!="") && ($degree_10!="") && ($degree_12!="") && ($degree_bd!="") && ($degree_pg!="") && ($marks_10!="") && ($marks_12!="") && ($marks_bd!="") && ($marks_pg!="") && ($grade_10!="") && ($grade_12!="") && ($grade_bd!="") && ($grade_pg!="") && ($year_10!="") && ($year_12!="")&& ($year_bd!="")&& ($year_pg!="")&&($bd_2!="") &&($bd_3!="") &&($bd_4!="") &&($bd_5!="") &&($bd_6!="") &&($bd_7!="") &&($bd_8!="") &&($bd_agr!="") && ($bd_class!="") && ($md_1!="") &&($md_2!="") &&($md_3!="") &&($md_4!="") &&($md_agr!="") && ($md_class!=""))
		{
			$sql5 ="update fgusers3 set submit_status='1' where username='$t1'";
		    $result4=mysql_query($sql5) or die(mysql_error());
			echo "<script>
				alert('Application submitted Succesfully');
				window.location.href='thank-you.php';
				</script>";
		}
		else
		{
			echo "<script>
				alert('Some Fields are empty! Please make sure you have entered all the required fields.');
				window.location.href='forms.php';
				</script>";
		}
	}
	

		
	?>

	</head>

	<body>
	</body>
</html>