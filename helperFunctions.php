<?php

//Important Helper Functions
//Author - Hari Krishna Majety


//Checks whether the string has only alphabets and numbers. Returns false if not or if string is empty.  
function hasOnlyAlphaNumerics($string)
{
	$regex="/^[A-Za-z0-9]+$/";
	if(preg_match($regex, $string))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//Checks whether the string has only alphabets. Returns false if not or if string is empty.
function hasOnlyAlphabets($string)
{
	$regex="/^[A-Za-z]+$/";
	if(preg_match($regex, $string))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//Checks whether the string passed has only numbers. Returns false if not or if string is empty.
function hasOnlyNumbers($string)
{
	$regex="/^[0-9]+$/";
	if(preg_match($regex, $string))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//Checks Whether the string has only the charaters passed to it(as concatenated string) or not. Returns false if not or if string is empty.
function hasOnlyCharacters($characters,$string)
{
	$regex="/^[".$characters."]+$/";
	if(preg_match($regex, $string))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function validateDate($rawDate,$seperator='/')
	{
		$ndate=explode($seperator,$rawDate);
		//var_dump($ndate);
		if($ndate[2]<1947||$ndate[2]>2050)
		{
			return false;
		}
		if($ndate[2]%4==0)
		{
			$daysArray=[31,29,31,30,31, 30,31,31,30,31, 30,31];
			if($ndate[1]>=1&&$ndate[1]<=12)
			{
				if($ndate[0]>=0&&$ndate[0]<=$daysArray[$ndate[1]-1])
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else
		{
			$daysArray=[31,28,31,30,31, 30,31,31,30,31, 30,31];
			if($ndate[1]>=1&&$ndate[1]<=12)
			{
				if($ndate[0]>=0&&$ndate[0]<=$daysArray[$ndate[1]-1])
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}

//if($_POST["Full_Name"]!="" || $_POST["gender"]!="" || $_POST["date1"] !=""  || $_POST["fname"]!="" || $_POST["Nationality"]!="" || $_POST["Marital_status"]!="" || $_POST["Physically_challenged"]!="" || $_POST["community"]!="" || $_POST["pemail"]!="" || $_POST["aemail"]!="" || $_POST["Temp_Address"]!="" || $_POST["T_District"]!="" || $_POST["T_state"]!="" || $_POST["T_pincode"]!="" || $_POST["T_phone_number"]!="" ||$_POST["T_mobile_number"]!="" || $_POST["perm_Address"]!="" || $_POST["P_District"]!="" || $_POST["P_state"]!="" || $_POST["P_pincode"]!="" || $_POST["P_phone_number"]!="" ||$_POST["P_mobile_number"]!="")
function validatePersonalInfoOnSave($personalInfo)
{
	$k='';
	if($personalInfo['Full_Name']!='')
	{
		$fullName=$personalInfo['Full_Name'];
		if(!hasOnlyAlphabets($fullName))
		{
			$k='Enter a Valid name. Only Alphabets<br/>';
		}
	}
	if($personalInfo['gender']!='M'||$personalInfo['gender']!='F')
	{
		$k.='Enter Gender<br/.';
	}
	if($personalInfo['date1']!='')
	{
		if(!validateDate($personalInfo['date1']))
		{
			$k.="Enter a Valid date<br/>";
		}
	}
	if($personalInfo['fname']!="")
	{
		if(!hasOnlyAlphabets($personalInfo['fname']))
		{
			$k.="Enter a Valid Father's Name. Only Alphabets are Allowed<br/>";
		}
	}
	if($personalInfo['pemail']!='')
	{
		if(!(filter_var($personalInfo['pemail'], FILTER_VALIDATE_EMAIL))
		{
			$k.="Enter a valid Primary Email Address.";
		}
	}
	
	if($personalInfo['aemail']!='')
	{
		if(!(filter_var($personalInfo['aemail'], FILTER_VALIDATE_EMAIL))
		{
			$k.="Enter a valid Alternate Email Address.<br/>";
		}

		if($personalInfo['pemail']=="")
		{
			$k.='Fill Primary Email first.<br/>';
		}		
	}

	if($k=='')
	{
		return true;
	}
	else
	{
		return $k;
	}
	

}
?>