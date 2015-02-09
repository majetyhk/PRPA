<?php

//Important Helper Functions
//Author - Hari Krishna Majety


//Checks whether the string has only alphabets and numbers. Returns false if not or if string is empty.  
function hasOnlyAlphaNumerics($string)
{
	$regex="^[A-Za-z0-9]+$";
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
	$regex="^[A-Za-z]+$";
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
	$regex="^[0-9]+$";
	if(preg_match($regex, $string))
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>