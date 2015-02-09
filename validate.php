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
	while($experienceInfo = mysql_fetch_array($result2))
  	{
		$org_1 = $experienceInfo['org_1'];
		$org_2 = $experienceInfo['org_2'];
		$org_3 = $experienceInfo['org_3'];
		$org_4 = $experienceInfo['org_4'];
		$org_5 = $experienceInfo['org_5'];
		$des_1 = $experienceInfo['des_1'];
		$des_2 = $experienceInfo['des_2'];
		$des_3 = $experienceInfo['des_3'];
		$des_4 = $experienceInfo['des_4'];
		$des_5 = $experienceInfo['des_5'];
		$per_1 = $experienceInfo['per_1'];
		$per_2 = $experienceInfo['per_2'];
		$per_3 = $experienceInfo['per_3'];
		$per_4 = $experienceInfo['per_4'];
		$per_5 = $experienceInfo['per_5'];
		$work_1 = $experienceInfo['work_1'];
		$work_2 = $experienceInfo['work_2'];
		$work_3 = $experienceInfo['work_3'];
		$work_4 = $experienceInfo['work_4'];
		$work_5 = $experienceInfo['work_5'];
	}	
}
	
		
$sql3 = "select * from personal_info where user_name='$t1'";

$result3=mysql_query($sql3) or die(mysql_error());
while($personalInfo = mysql_fetch_array($result3))
{
	$Full_Name = $personalInfo['Full_Name'];
	$gender = $personalInfo['gender'];
	$dob = $personalInfo['dob'];
	$fname = $personalInfo['fname'];
	$nation=$personalInfo['Nationality'];
	$marital=$personalInfo['Marital_status'];
	$pc=$personalInfo['Physically_challenged'];
	$com=$personalInfo['community'];
	$minority=$personalInfo['Minority'];
	$pemail = $personalInfo['pemail'];
	$aemail = $personalInfo['aemail'];
	$Temp_Address = $personalInfo['Temp_Address'];
	$T_District = $personalInfo['T_District'];
	$T_pincode = $personalInfo['T_pincode'];
	$T_phone_number = $personalInfo['T_phone_number'];
	$T_mobile_number = $personalInfo['T_mobile_number'];
	$perm_Address = $personalInfo['perm_Address'];
	$P_District = $personalInfo['P_District'];
	$P_pincode = $personalInfo['P_pincode'];
	$P_phone_number = $personalInfo['P_phone_number'];
	$P_mobile_number = $personalInfo['P_mobile_number'];
	$tstate=$personalInfo['T_state'];
	$pstate=$personalInfo['P_state'];
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Validate</title>
	<?php

	if(!isset($Full_Name) || !isset($gender) || !isset($dob)  || !isset($fname)  || !isset($nation) || !isset($marital) || !isset($pc) || !isset($com) || !isset($pemail)  || !isset($Temp_Address) || !isset($T_District) || !isset($tstate) || !isset($T_pincode)  ||!isset($perm_Address) || !isset($P_District) || !isset($pstate) || !isset($P_pincode))
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
		    echo "<br />";
			echo '<center><span style="font-size: 24px;"><a href="forms.php">Some fields are empty in personal information. Make sure you have filled in all the required fields.</a></span></center>';
			echo '</head> <body></body></html>';
			/*echo "<script>
			alert('Errors in Personal Information');
			window.location.href='forms.php';
			</script>";*/
			//window.location.href='forms.php';
	}
	
	else if(($univ_10=="") || ($univ_12=="") || ($univ_bd=="") || ($univ_pg=="") || ($degree_10=="") || ($degree_12=="") || ($degree_bd=="") || ($degree_pg=="") || ($marks_10=="") || ($marks_12=="") || ($marks_bd=="") || ($marks_pg=="") || ($grade_10=="") || ($grade_12=="") || ($grade_bd=="") || ($grade_pg=="") || ($year_10=="") || ($year_12=="")|| ($year_bd=="")|| ($year_pg=="")||($bd_2=="") ||($bd_3=="") ||($bd_4=="") ||($bd_5=="") ||($bd_6=="") ||($bd_7=="") ||($bd_8=="") ||($bd_agr=="") || ($bd_class=="") || ($md_1=="") ||($md_2=="") ||($md_3=="") ||($md_4=="") ||($md_agr=="") || ($md_class==""))
	{
		    echo "<br />";
			echo '<center><span style="font-size: 24px;">Some Fields are empty in <a href="forms.php">Academic Information</a></span></center>';
			echo '</head> <body></body></html>';
			//if(!isset($univ_pg)) echo 'crap';
			//window.location.href='forms.php';
			/*echo "<script>
			alert('Errors in Academic Information');
			window.location.href='forms.php';
			</script>";*/
	}
	
	else
	{

		/*if(($Full_Name!="") && ($gender!="") && ($dob!="")  && ($fname!="") && ($nation!="") && ($marital!="") && ($pc!="") && ($com!="") && ($pemail!="")  && ($Temp_Address!="") && ($T_District!="") && ($tstate!="") && ($T_pincode!="")  &&($perm_Address!="") && ($P_District!="") && ($pstate!="") && ($P_pincode!="") && ($univ_10!="") && ($univ_12!="") && ($univ_bd!="") && ($univ_pg!="") && ($degree_10!="") && ($degree_12!="") && ($degree_bd!="") && ($degree_pg!="") && ($marks_10!="") && ($marks_12!="") && ($marks_bd!="") && ($marks_pg!="") && ($grade_10!="") && ($grade_12!="") && ($grade_bd!="") && ($grade_pg!="") && ($year_10!="") && ($year_12!="")&& ($year_bd!="")&& ($year_pg!="")&&($bd_2!="") &&($bd_3!="") &&($bd_4!="") &&($bd_5!="") &&($bd_6!="") &&($bd_7!="") &&($bd_8!="") &&($bd_agr!="") && ($bd_class!="") && ($md_1!="") &&($md_2!="") &&($md_3!="") &&($md_4!="") &&($md_agr!="") && ($md_class!=""))*/
		$message='';
	//1
	
		$fullName=$personalInfo['Full_Name'];
		if(!hasOnlyAlphabets($fullName))
		{
			$message='Enter a Valid name. Only Alphabets<br/>';
		}

	
		if($personalInfo['gender']!='Male'||$personalInfo['gender']!='Female')
		{
			$message.='Enter Gender<br/.';
		}
	//2
	
		$currentTimestamp=time();
		if(($dob=dateStringToTimestamp($personalInfo['date1']))==false)
		{
			$message.="Enter a Valid date<br/>";
		}
		else if($dob>=$currentTimestamp)
		{
			$message.="Date of Birth cant be greater than current date.<br/>";
		}
	
	//3
	
		if(!hasOnlyAlphabets($personalInfo['fname']))
		{
			$message.="Enter a Valid Father's Name. Only Alphabets are Allowed<br/>";
		}
	

	
		if(!(filter_var($personalInfo['pemail'], FILTER_VALIDATE_EMAIL))
		{
			$message.="Enter a valid Primary Email Address.";
		}
	
	
	
		$check=true;
		if(!(filter_var($personalInfo['aemail'], FILTER_VALIDATE_EMAIL))
		{
			$message.="Enter a valid Alternate Email Address.<br/>";
			$check=false;
		}


		if($personalInfo['pemail']==$personalInfo['aemail'])
		{
			$message.="Primary and Alternate Email Can't be same. Fill in different one else leave it.<br/>";
			$check=false;
		}

	
		if(!hasOnlyCharacters('0-9-',$personalInfo['T_pincode']))
		{
			$message.="Please Enter  Valid Pincode. Numerics Only.<br/>";
		}
	

		if($personalInfo['T_phone_number']!='')
		{

			if(!hasOnlyNumbers($personalInfo['T_phone_number']))
			{
				$message.="Please Enter Valid phone number. Enter Only Numbers."
			}
		}

		if($personalInfo['T_mobile_number']!='')
		{
			if(!hasOnlyNumbers($personalInfo['T_mobile_number']))
			{
				$message.="Please Enter Valid mobile number. Enter Only Numbers."
			}
		}


	
		if(!hasOnlyCharacters('0-9-',$personalInfo['P_pincode']))
		{
			$message.="Enter Valid Pincode in Permanent Address.<br/>";
		}
	

		if($personalInfo['P_phone_number']!='')
		{
			if(!hasOnlyNumbers($personalInfo['P_phone_number']))
			{
				$message.="Enter valid phone number in Permanent Address. Enter Only Numbers<br/>";
			}
		}

		if($personalInfo['P_mobile_number']!='')
		{
			if(!hasOnlyNumbers($personalInfo['P_mobile_number']))
			{
				$message.="Enter Valid mobile number in Permanent Address. Enter Only Numbers.<br/>";
			}
		}

		//Personal Info validation code ends
		//Experience validation code begins

		if($experienceInfo['org_1']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['org_1']))
			{
				$message.="Enter a Valid Organisation name. Only Alphanumerics are Allowed in Work Experience 1";
			}
		}

		if($experienceInfo['des_1']!='')
		{
			if(!hasOnlyAlphabets($experienceInfo['des_1']))
			{
				$message.="Enter A valid Designation. Only Alphabets are Allowed in Work Experience 1.";
			}
		}

		if($experienceInfo['per_1']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['per_1']))
			{
				$message.="Enter A valid Experience Period. Only Alpha Numerics are Allowed in Work Experience 1.";
			}
		}

		if($experienceInfo['work_1']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['work_1']))
			{
				$message.="Only Alpha Numerics are allowed in Nature Of work in work Experience 1.";
			}
		}



		//Work Exp 2

		if($experienceInfo['org_2']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['org_2']))
			{
				$message.="Enter a Valid Organisation name. Only Alphanumerics are Allowed in Work Experience 2";
			}
		}

		if($experienceInfo['des_2']!='')
		{
			if(!hasOnlyAlphabets($experienceInfo['des_2']))
			{
				$message.="Enter A valid Designation. Only Alphabets are Allowed in Work Experience 2.";
			}
		}

		if($experienceInfo['per_2']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['per_2']))
			{
				$message.="Enter A valid Experience Period. Only Alpha Numerics are Allowed in Work Experience 2.";
			}
		}

		if($experienceInfo['work_2']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['work_2']))
			{
				$message.="Only Alpha Numerics are allowed in Nature Of work in work Experience 2.";
			}
		}

		//work exp 3

		if($experienceInfo['org_3']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['org_3']))
			{
				$message.="Enter a Valid Organisation name. Only Alphanumerics are Allowed in Work Experience 3";
			}
		}

		if($experienceInfo['des_3']!='')
		{
			if(!hasOnlyAlphabets($experienceInfo['des_3']))
			{
				$message.="Enter A valid Designation. Only Alphabets are Allowed in Work Experience 3.";
			}
		}

		if($experienceInfo['per_3']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['per_3']))
			{
				$message.="Enter A valid Experience Period. Only Alpha Numerics are Allowed in Work Experience 3.";
			}
		}

		if($experienceInfo['work_3']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['work_3']))
			{
				$message.="Only Alpha Numerics are allowed in Nature Of work in work Experience 3.";
			}
		}


		//work exp 4
		if($experienceInfo['org_4']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['org_4']))
			{
				$message.="Enter a Valid Organisation name. Only Alphanumerics are Allowed in Work Experience 4";
			}
		}

		if($experienceInfo['des_4']!='')
		{
			if(!hasOnlyAlphabets($experienceInfo['des_4']))
			{
				$message.="Enter A valid Designation. Only Alphabets are Allowed in Work Experience 4.";
			}
		}

		if($experienceInfo['per_4']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['per_4']))
			{
				$message.="Enter A valid Experience Period. Only Alpha Numerics are Allowed in Work Experience 4.";
			}
		}

		if($experienceInfo['work_4']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['work_4']))
			{
				$message.="Only Alpha Numerics are allowed in Nature Of work in work Experience 4.";
			}
		}

		//work exp 5

		if($experienceInfo['org_5']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['org_5']))
			{
				$message.="Enter a Valid Organisation name. Only Alphanumerics are Allowed in Work Experience 5";
			}
		}

		if($experienceInfo['des_5']!='')
		{
			if(!hasOnlyAlphabets($experienceInfo['des_5']))
			{
				$message.="Enter A valid Designation. Only Alphabets are Allowed in Work Experience 5.";
			}
		}

		if($experienceInfo['per_5']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['per_5']))
			{
				$message.="Enter A valid Experience Period. Only Alpha Numerics are Allowed in Work Experience 5.";
			}
		}

		if($experienceInfo['work_5']!='')
		{
			if(!hasOnlyAlphaNumerics($experienceInfo['work_5']))
			{
				$message.="Only Alpha Numerics are allowed in Nature Of work in work Experience 5.";
			}
		}

	
		if($message=='')
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