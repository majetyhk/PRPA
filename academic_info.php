<?PHP
include('db.php');
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<html>
<head></head>
<body style="background-color:#666"></body>
<?php
 
	$t = $fgmembersite->UserFullName();
	if($_POST["univ_10"] || $_POST["degree_10"] || $_POST["marks_10"] || $_POST["grade_10"] || $_POST["year_10"] || $_POST["bd_univ"] || $_POST["bd_degree"] && $_POST["bd_marks"] || $_POST["bd_grade"] || $_POST["bd_year"] || $_POST["univ_12"] || $_POST["degree_12"] || $_POST["marks_12"] || $_POST["grade_12"] || $_POST["year_12"] || $_POST["bd_1"] || $_POST["bd_2"] ||$_POST["bd_3"] || $_POST["bd_4"] || $_POST["bd_5"] || $_POST["bd_6"] ||$_POST["bd_7"] || $_POST["bd_8"] || $_POST["bd_agr"] || $_POST["bd_class"] )
	{
		//print("<b><h1>$temp</h1>");
	    $sqlq="delete from qualifications where user_key = '$t'";
	    $res=mysql_query($sqlq) or die(mysql_error());	
	    $sql1="insert into  qualifications(user_key,10_univ,10_degree,10_marks,10_grade,10_year,12_univ,12_degree,12_marks,12_grade,12_year,bd_univ,bd_degree,bd_marks,bd_grade,bd_year,pg_univ,pg_degree,pg_marks,pg_grade,pg_year,o_univ,o_degree,o_marks,o_grade,o_year,bd_1,bd_2,bd_3,bd_4,bd_5,bd_6,bd_7,bd_8,bd_9,bd_10,bd_agr,bd_class,md_1,md_2,md_3,md_4,md_agr,md_class) values('$t','$_POST[univ_10]' , '$_POST[degree_10]' , '$_POST[marks_10]' , '$_POST[grade_10]' , '$_POST[year_10]' , '$_POST[univ_12]' , '$_POST[degree_12]' , '$_POST[marks_12]' , '$_POST[grade_12]' , '$_POST[year_12]' , '$_POST[bd_univ]' , '$_POST[bd_degree]' , '$_POST[bd_marks]' , '$_POST[bd_grade]' , '$_POST[bd_year]' , '$_POST[pg_univ]' , '$_POST[pg_degree]' , '$_POST[pg_marks]' , '$_POST[pg_grade]' , '$_POST[pg_year]' , '$_POST[o_univ]' , '$_POST[o_degree]' , '$_POST[o_marks]' , '$_POST[o_grade]' , '$_POST[o_year]' ,'$_POST[bd_1]' ,'$_POST[bd_2]' ,'$_POST[bd_3]' ,'$_POST[bd_4]' ,'$_POST[bd_5]' ,'$_POST[bd_6]' ,'$_POST[bd_7]' ,'$_POST[bd_8]' ,'$_POST[bd_9]' ,'$_POST[bd_10]' ,'$_POST[bd_agr]' ,'$_POST[bd_class]' ,'$_POST[md_1]' ,'$_POST[md_2]' ,'$_POST[md_3]' ,'$_POST[md_4]' ,'$_POST[md_agr]' ,'$_POST[md_class]' )";
	    $result1=mysql_query($sql1) or die(mysql_error());
	    if(($message=validateQualificationsInfoOnSave($_POST))==true)
	    {
	    	/* NO errors in qualifications. Alert to tell qualifications are saved succesfully */
	    }
	    else
	    {
	    	$message= "Saved but few details entered needs to be changed.".$message;
	    	echo "<script>
			alert(".$message.");
	        window.location.href='forms.php';
			</script>";
	    }
		$sq="delete from experience where user_ex = '$t'";
	    $rs=mysql_query($sq) or die(mysql_error());	

		 $sql2="insert into  experience(user_ex,org_1,des_1,per_1,work_1,org_2,des_2,per_2,work_2,org_3,des_3,per_3,work_3,org_4,des_4,per_4,work_4,org_5,des_5,per_5,work_5) values('$t','$_POST[org_1]' , '$_POST[des_1]' , '$_POST[per_1]' , '$_POST[work_1]' , '$_POST[org_2]' , '$_POST[des_2]' , '$_POST[per_2]' , '$_POST[work_2]' , '$_POST[org_3]' , '$_POST[des_3]' , '$_POST[per_3]' , '$_POST[work_3]' , '$_POST[org_4]' , '$_POST[des_4]' , '$_POST[per_4]' , '$_POST[work_4]' , '$_POST[org_5]' , '$_POST[des_5]' , '$_POST[per_5]' , '$_POST[work_5]' )";
	    $result2=mysql_query($sql2) or die(mysql_error());	
		echo "<script>
			alert('Details saved Succesfully.');
			window.location.href='forms.php';
			</script>";
	}
	else {
	 echo "<script>alert('Invalid input please check again');
			window.location.href='forms.php';
			</script>";
	}

	function validateQualificationsInfoOnSave($qualificationsInfo){
		$message='';
		/**********  CLASS 10 validation  ************/
		if($qualificationsInfo["univ_10"]!=''){
			$univName_10 = $qualificationsInfo["univ_10"];
			if(!hasOnlyAlphabets($univName_10)){
				$message = $message."Enter the valid class 10 Board name. Only Alphabhets<br />";
			}
		}
		if(($qualificationsInfo["grade_10"]!='% out of 100') || ($qualificationsInfo["grade_10"]!='CGPA out of 10') || ($qualificationsInfo["grade_10"]!='CPI out of 4') || ($qualificationsInfo["grade_10"]!='CPI out of 8') ){
			$message = $message."Enter valid 10th Evalution of marks <br />";
		}
		if($qualificationsInfo["marks_10"]!=''){
			$marks_10 = $qualificationsInfo["marks_10"];
			if(!isValidPercentage($marks_10)){
				$message = $message."Enter valid percentage for class 10 <br />";
			}
		}
		if($qualificationsInfo["year_10"]!=''){
			$passYear_10 = $qualificationsInfo["year_10"];
			if(!hasOnlyNumbers($passYear_10)){
				$message = $message."Enter valid year of passsing for class 10th <br />";
			}
		}
		/*********  CLASS 12 Validation  ************/
		if($qualificationsInfo["univ_12"]!=''){
			$univName_12 = $qualificationsInfo["univ_12"];
			if(!hasOnlyAlphabets($univName_12)){
				$message = $message."Enter the valid class 12th Board name. Only Alphabhets<br />";
			}
		}
		if(($qualificationsInfo["grade_12"]!='% out of 100') || ($qualificationsInfo["grade_12"]!='CGPA out of 10') || ($qualificationsInfo["grade_12"]!='CPI out of 4') || ($qualificationsInfo["grade_12"]!='CPI out of 8') ){
			$message = $message."Enter valid Evalution of marks for class 12th <br />";
		}
		if($qualificationsInfo["marks_12"]!=''){
			$marks_12 = $qualificationsInfo["marks_12"];
			if(!isValidPercentage($marks_12)){
				$message = $message."Enter valid percentage for class 12 <br />";
			}
		}
		if($qualificationsInfo["year_12"]!=''){
			$passYear_12 = $qualificationsInfo["year_12"];
			if(!hasOnlyNumbers($passYear_12)){
				$message = $message."Enter valid year of passsing for Board 12 <br />";
			}
		}
		/************ bachelor degree validation  ***************/
		if($qualificationsInfo["bd_univ"]!=''){
			$bd_univName = $qualificationsInfo["bd_univ"];
			if(!hasOnlyAlphabets($bd_univName)){
				$message = $message."Enter the valid Bachelor Degree University name. Only Alphabhets<br />";
			}
		}
		if($qualificationsInfo["bd_degree"]!=''){
			$bd_degree = $qualificationsInfo["bd_degree"];
			if(!hasOnlyAlphaNumerics($bd_degree)){
				$message = $message."Enter the Valid Bachelor Degree Equivalent<br />";
			}
		}
		if(($qualificationsInfo["bd_grade"]!='% out of 100') || ($qualificationsInfo["bd_grade"]!='CGPA out of 10') || ($qualificationsInfo["bd_grade"]!='CPI out of 4') || ($qualificationsInfo["bd_grade"]!='CPI out of 8') ){
			$message = $message."Enter valid Evalution of marks for Bachelor degree <br />";
		}
		if($qualificationsInfo["bd_marks"]!=''){
			$bd_marks = $qualificationsInfo["bd_marks"];
			if(!isValidPercentage($bd_marks)){
				$message = $message."Enter valid percentage for Bachelor Degree <br />";
			}
		}
		if($qualificationsInfo["bd_year"]!=''){
			$passYear_bd = $qualificationsInfo["bd_year"];
			if(!hasOnlyNumbers($passYear_bd)){
				$message = $message."Enter valid year of passsing for Bachelor Degree <br />";
			}
		}
		/**************  Masters degree validation  ****************/
		if($qualificationsInfo["pg_univ"]!=''){
			$pg_univName = $qualificationsInfo["pg_univ"];
			if(!hasOnlyAlphabets($pg_univName)){
				$message = $message."Enter the valid Masters Degree University name. Only Alphabhets<br />";
			}
		}
		if($qualificationsInfo["pg_degree"]!=''){
			$pg_degree = $qualificationsInfo["pg_degree"];
			if(!hasOnlyAlphaNumerics($pg_degree)){
				$message = $message."Enter the Valid Masters Degree Equivalent<br />";
			}
		}
		if(($qualificationsInfo["pg_grade"]!='% out of 100') || ($qualificationsInfo["pg_grade"]!='CGPA out of 10') || ($qualificationsInfo["pg_grade"]!='CPI out of 4') || ($qualificationsInfo["pg_grade"]!='CPI out of 8') ){
			$message = $message."Enter valid Evalution of marks for Masters degree <br />";
		}
		if($qualificationsInfo["pg_marks"]!=''){
			$pg_marks = $qualificationsInfo["pg_marks"];
			if(!isValidPercentage($pg_marks)){
				$message = $message."Enter valid percentage for Masters Degree <br />";
			}
		}
		if($qualificationsInfo["pg_year"]!=''){
			$passYear_pg = $qualificationsInfo["pg_year"];
			if(!hasOnlyNumbers($passYear_pg)){
				$message = $message."Enter valid year of passsing for masters degree <br />";
			}
		}
		/**************   Other degree validation  ********************/
		if($qualificationsInfo["o_univ"]!=''){
			$o_univName = $qualificationsInfo["o_univ"];
			if(!hasOnlyAlphabets($o_univName)){
				$message = $message."Enter the valid others Degree University name. Only Alphabhets<br />";
			}
		}
		if($qualificationsInfo["o_degree"]!=''){
			$o_degree = $qualificationsInfo["o_degree"];
			if(!hasOnlyAlphaNumerics($o_degree)){
				$message = $message."Enter the Valid others Degree Equivalent<br />";
			}
		}
		if(($qualificationsInfo["o_grade"]!='% out of 100') || ($qualificationsInfo["o_grade"]!='CGPA out of 10') || ($qualificationsInfo["o_grade"]!='CPI out of 4') || ($qualificationsInfo["o_grade"]!='CPI out of 8') ){
			$message = $message."Enter valid Evalution of marks for others <br />";
		}
		if($qualificationsInfo["o_marks"]!=''){
			$o_marks = $qualificationsInfo["o_marks"];
			if(!isValidPercentage($o_marks)){
				$message = $message."Enter valid percentage for other Degree <br />";
			}
		}
		if($qualificationsInfo["o_year"]!=''){
			$passYear_o = $qualificationsInfo["o_year"];
			if(!hasOnlyNumbers($passYear_o)){
				$message = $message."Enter valid year of passsing for other <br />";
			}
		}
		/************* B.tech CGPA validation *************/
		if($qualificationsInfo["bd_1"]!=''){
			$bd_cgpa1 = $qualificationsInfo["bd_1"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech I sem <br />";
			}
		}
		if($qualificationsInfo["bd_2"]!=''){
			$bd_cgpa2 = $qualificationsInfo["bd_2"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech II sem <br />";
			}
		}
		if($qualificationsInfo["bd_3"]!=''){
			$bd_cgpa3 = $qualificationsInfo["bd_3"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech III sem <br />";
			}
		}
		if($qualificationsInfo["bd_4"]!=''){
			$bd_cgpa4 = $qualificationsInfo["bd_4"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech IV sem <br />";
			}
		}
		if($qualificationsInfo["bd_5"]!=''){
			$bd_cgpa5 = $qualificationsInfo["bd_5"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech V sem <br />";
			}
		}
		if($qualificationsInfo["bd_6"]!=''){
			$bd_cgpa6 = $qualificationsInfo["bd_6"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech VI sem <br />";
			}
		}
		if($qualificationsInfo["bd_7"]!=''){
			$bd_cgpa7 = $qualificationsInfo["bd_7"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech VII sem <br />";
			}
		}
		if($qualificationsInfo["bd_8"]!=''){
			$bd_cgpa8 = $qualificationsInfo["bd_8"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech VIII sem <br />";
			}
		}
		if($qualificationsInfo["bd_9"]!=''){
			$bd_cgpa9 = $qualificationsInfo["bd_9"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech IX sem <br />";
			}
		}
		if($qualificationsInfo["bd_10"]!=''){
			$bd_cgpa10 = $qualificationsInfo["bd_10"];
			if(!isValidPercentage($bd_cgpa1)){
				$message = $message."Enter valid percentage for B.E/B.tech X sem <br />";
			}
		}
		if($qualificationsInfo["bd_agr"]!=''){
			$bd_cgpaagr = $qualificationsInfo["bd_agr"];
			if(!isValidPercentage($bd_cgpaagr)){
				$message = $message."Enter valid aggregate percentage for B.E/B.tech <br />";
			}
		}
		if($qualificationsInfo["bd_class"]!=''){
			$bd_agrclass = $qualificationsInfo["bd_class"];
			if(!hasOnlyAlphaNumerics($bd_agrclass)){
				$message = $message."Enter valid class for B.E/B.tech <br />";
			}
		}
		if($qualificationsInfo["md_1"]!=''){
			$md_cgpa1 = $qualificationsInfo["md_1"];
			if(!isValidPercentage($md_cgpa1)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}
		if($qualificationsInfo["md_2"]!=''){
			$md_cgpa2 = $qualificationsInfo["md_2"];
			if(!isValidPercentage($md_cgpa2)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}
		if($qualificationsInfo["md_3"]!=''){
			$md_cgpa3 = $qualificationsInfo["md_3"];
			if(!isValidPercentage($md_cgpa3)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}
		if($qualificationsInfo["md_4"]!=''){
			$md_cgpa4 = $qualificationsInfo["md_4"];
			if(!isValidPercentage($md_cgpa4)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}
		if($qualificationsInfo["md_agr"]!=''){
			$md_cgpaagr = $qualificationsInfo["md_agr"];
			if(!isValidPercentage($md_cgpaagr)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}
		if($qualificationsInfo["md_class"]!=''){
			$md_agrClass = $qualificationsInfo["md_class"];
			if(!hasOnlyAlphaNumerics($md_agrClass)){
				$message = $message."Enter valid aggregate percentage for M.E/M.tech <br />";
			}
		}


	}

?>
</html>