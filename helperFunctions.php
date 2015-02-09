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


function followsRegex($regex,$string)
{
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
	//$count=0;
	$message='';
	//1
	if($personalInfo['Full_Name']!='')
	{
		$fullName=$personalInfo['Full_Name'];
		if(!hasOnlyAlphabets($fullName))
		{
			$message='Enter a Valid name. Only Alphabets<br/>';
		}
		/*else
		{
			$count++;
		}*/
	}
	
	if($personalInfo['gender']!='Male'||$personalInfo['gender']!='Female')
	{
		$message.='Enter Gender<br/.';
	}
	//2
	if($personalInfo['date1']!='')
	{
		if(!validateDate($personalInfo['date1']))
		{
			$message.="Enter a Valid date<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}
	//3
	if($personalInfo['fname']!="")
	{
		if(!hasOnlyAlphabets($personalInfo['fname']))
		{
			$message.="Enter a Valid Father's Name. Only Alphabets are Allowed<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}

	if($personalInfo['pemail']!='')
	{
		if(!(filter_var($personalInfo['pemail'], FILTER_VALIDATE_EMAIL))
		{
			$message.="Enter a valid Primary Email Address.";
		}
		/*else
		{
			$count++;
		}*/
	}
	
	if($personalInfo['aemail']!='')
	{
		$check=true;
		if(!(filter_var($personalInfo['aemail'], FILTER_VALIDATE_EMAIL))
		{
			$message.="Enter a valid Alternate Email Address.<br/>";
			$check=false;
		}

		if($personalInfo['pemail']=="")
		{
			$message.='Fill Primary Email first.<br/>';
			$check=false;
		}

		if($personalInfo['pemail']!=''&&$personalInfo['pemail']==$personalInfo['aemail'])
		{
			$message.="Primary and Alternate Email Can't be same. Fill in different one else leave it.<br/>";
			$check=false;
		}
		if($check)
		{
			$count++;
		}
	}

	/*if($personalInfo['Temp_Address']!='')
	{
		$count++;
	}*/

	if($personalInfo['T_pincode']!='')
	{
		if(!hasOnlyCharacters('0-9-',$personalInfo['T_pincode']))
		{
			$message.="Please Enter  Valid Pincode. Numerics Only.<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}

	if($personalInfo['T_phone_number']!='')
	{

		if(!hasOnlyNumbers($personalInfo['T_phone_number']))
		{
			$message.="Please Enter Valid phone number. Enter Only Numbers."
		}
		/*else
		{
			$count++;
		}*/
	}

	if($personalInfo['T_mobile_number']!='')
	{
		if(!hasOnlyNumbers($personalInfo['T_mobile_number']))
		{
			$message.="Please Enter Valid mobile number. Enter Only Numbers."
		}
		/*else
		{
			$count++;
		}*/
	}

	/*if($personalInfo['perm_Address']!='')
	{
		$count++;
	}*/

	if($personalInfo['P_pincode']!='')
	{
		if(!hasOnlyCharacters('0-9-',$personalInfo['P_pincode']))
		{
			$message.="Enter Valid Pincode in Permanent Address.<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}

	if($personalInfo['P_phone_number']!='')
	{
		if(!hasOnlyNumbers($personalInfo['P_phone_number']))
		{
			$message.="Enter valid phone number in Permanent Address. Enter Only Numbers<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}

	if($personalInfo['P_mobile_number']!='')
	{
		if(!hasOnlyNumbers($personalInfo['P_mobile_number']))
		{
			$message.="Enter Valid mobile number in Permanent Address. Enter Only Numbers.<br/>";
		}
		/*else
		{
			$count++;
		}*/
	}

	
	if($message=='')
	{
		return true;
	}
	else
	{
		return $message;
	}
	

}
?>