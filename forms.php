<?PHP
	include('db.php');
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin())
	{
	    $fgmembersite->RedirectToURL("login.php");
	    exit;
	}
?>

<!DOCTYPE html">
<html>
	<head >
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Application Form</title>
		<script src="Spry-UI-1.7/includes/SpryDOMUtils.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryDOMEffects.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryWidget.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryPanelSet.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryPanelSelector.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryFadingPanels.js" type="text/javascript"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/SpryTabbedPanels2.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/plugins/TabbedPanels2/SpryFadingPanelsPlugin.js" type="text/javascript"></script>
		<script src="Spry-UI-1.7/includes/plugins/TabbedPanels2/SpryTabbedPanelsKeyNavigationPlugin.js" type="text/javascript"></script>
		<link href="Spry-UI-1.7/css/TabbedPanels2/SpryTabbedPanels2.css" rel="stylesheet" type="text/css" />

		<style type="text/css">
			/* BeginOAWidget_Instance_2138522: #TabbedPanels2 */
			html
			{
				background-color:#EEE;
			}
			/* TabbedPanelsTabGroup */
			#TabbedPanels2 .TabbedPanelsTabGroup {
				top: 1px;
				left: 0px;
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: transparent;
				border-left: solid 0px inherit;
				border-bottom: solid 0px inherit;
				border-top: solid 0px inherit;
				border-right: solid 0px inherit;
				padding: 0px 0px 0px 0px;
			}

			/* TabbedPanelsTab */
			#TabbedPanels2.TabbedPanels .TabbedPanelsTab,
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTab {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: #DDD;
				border-left: solid 1px #CCC;
				border-bottom: solid 1px #999;
				border-top: solid 1px #999;
				border-right: solid 1px #999;
				padding: 4px 10px 4px 10px;
			}

			#TabbedPanels2.TabbedPanels .TabbedPanelsTab a,
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTab a {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
			}

			/* TabbedPanelsTabHover */
			#TabbedPanels2.TabbedPanels .TabbedPanelsTabHover,
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabHover {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: #EEE;
				border-left: solid 1px #CCC;
				border-bottom: solid 1px #999;
				border-top: solid 1px #999;
				border-right: solid 1px #999;
				padding: 4px 10px 4px 10px;
			}

			#TabbedPanels2.TabbedPanels .TabbedPanelsTabHover a,
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabHover a {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
			}

			/* TabbedPanelsTabSelected */
			#TabbedPanels2.TabbedPanels .TabbedPanelsTabSelected,
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabSelected {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: #EEE;
				border-left: solid 1px #CCC;
				border-bottom: solid 1px #EEE;
				border-top: solid 1px #999;
				border-right: solid 1px #999;
				padding: 4px 10px 4px 10px;
			}

			#TabbedPanels2.TabbedPanels .TabbedPanelsTabSelected a, 
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabSelected a {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
			}

			/* TabbedPanelsTabFocused */
			#TabbedPanels2.TabbedPanels .TabbedPanelsTabFocused, 
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabFocused {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: #EEE;
				border-left: solid 1px #CCC;
				border-bottom: solid 1px #EEE;
				border-top: solid 1px #999;
				border-right: solid 1px #999;
				padding: 4px 10px 4px 10px;
			}

			#TabbedPanels2.TabbedPanels .TabbedPanelsTabFocused a, 
			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabFocused a {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
			}


			/* TabbedPanelsContentGroup */
			#TabbedPanels2 .TabbedPanelsContentGroup {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: #EEE;
				border-left: solid 1px #CCC;
				border-bottom: solid 1px #CCC;
				border-top: solid 1px #999;
				border-right: solid 1px #999;
				padding: 0px 0px 0px 0px;
			}

			/* TabbedPanelsContentVisible */
			#TabbedPanels2 .TabbedPanelsContentVisible {
				font-family: inherit;
				font-weight: inherit;
				font-size: inherit;
				color: inherit;
				background-color: transparent;
				border-left: solid 0px #CCC;
				border-bottom: solid 0px #CCC;
				border-top: solid 0px #999;
				border-right: solid 0px #999;
				padding: 4px 12px 4px 12px;
			}

			#TabbedPanels2.BTabbedPanels .TabbedPanelsTab {
				border-bottom: solid 1px #999;
				border-top: solid 1px #999;
			}

			#TabbedPanels2.BTabbedPanels .TabbedPanelsTabSelected {
				border-top: solid 1px #999;
			}

			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabGroup {
				width: 10em;
				height: 20em;
				top: 1px;
				left: 0px;
			}

			#TabbedPanels2.VTabbedPanels .TabbedPanelsTabSelected {
				background-color: #EEE;
				border-bottom: solid 1px #EEE;
			}

			#TabbedPanels2.table{
			    
			}
			/* EndOAWidget_Instance_2138522 */
		</style>

		<script type="text/xml">
			/*
			<oa:widgets>
			  <oa:widget wid="2138522" binding="#TabbedPanels2" />
			</oa:widgets>
			*/
		</script>
	</head>

	<?php 
		$userName = $fgmembersite->UserFullName();
		$sqlQuery="select submit_status from fgusers3 where username='$userName'";
		$resultQuery=mysql_query($sqlQuery) or die(mysql_error());
		$row = mysql_fetch_array($resultQuery);
		$resultVal=$row[0];
		if($resultVal==1)
		{
			echo '<script type="text/javascript">window.location="thank-you.php";</script>';
		}
		print '<center><p>Welcome '.'<strong>'.$userName.'</strong>'.'</p></center>';
		$sqlQuery2="select id_user from fgusers3 where username='$userName'";
		$resultQuery2=mysql_query($sqlQuery2) or die(mysql_error());
		$applnNo='';
		while($row = mysql_fetch_array($resultQuery2))
		{
			if($row['id_user'] >= 1 && $row['id_user'] < 10)
			{
				$applnNo='DM14D00'.$row['id_user'];
			}
			else if($row['id_user'] >= 10 && $row['id_user'] < 100)
			{
				$applnNo='DM14D0'.$row['id_user'];
			}
			else
			{
				$applnNo='DM14D'.$row['id_user'];
			}
		}
		print '<center><h3>Application Number <font style="color:#36F">'.$applnNo.'</font></h3></center><br>';

		//TILL HERE CODE CORRECTION IS HERE

		$sql1 = "select * from qualifications where user_key='$userName'";
		 // $sql1="insert into personal_info(App_no) values ('$temp')";
		$result1=mysql_query($sql1) or die(mysql_error());
		if(!$result1||mysql_num_rows($result1)<1)
		{
			//echo 'empty result';
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
				
		$sqlQuery2 = "select * from experience where user_ex='$userName'";
		$resultQuery2=mysql_query($sqlQuery2) or die(mysql_error());
		if(!$resultQuery2||mysql_num_rows($resultQuery2)<1)
		{
			//echo 'empty result';
		}
		else
			while($row = mysql_fetch_array($resultQuery2))
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
				
		$sql3 = "select * from personal_info where user_name='$userName'";
		$result3=mysql_query($sql3) or die(mysql_error());
		while($row = mysql_fetch_array($result3))
		  	{
				$Full_Name = $row['Full_Name'];
				$gender = $row['gender'];
				$dob=date("d-m-Y", strtotime($row['dob']));
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
				
		//return  mysql_num_rows($result);

	?>
	<div align="right">
		<p><a href='change-pwd.php'>Change password</a></p>
	</div>
	<div align="center">
		<?php print "\n<a href='logout.php'>Logout</a><br>\n";?>
	</div>


	<body>	
		<div id="TabbedPanels2">
		<div>
		  	<h2>Personal Info</h2>
		  	<br>
		  	<center><strong>Please save your actions before you go to next TAB<br /></strong></center>
			<form name="form1" method="post" action="personal_info.php">
		   
				<table align="center" class="table" cellspacing="6" width="85%">
					<tr>
						<td width="40%" valign="top">Name<font color=red>*</font> :</td>
						<td width="60%" colspan="2">
							<input required="required" onkeypress="return isAlpha(event,errorName);" ondrop="return false;" onpaste="return false;" name='Full_Name' type=text maxlength=50 id='Full_Name' value="<?php if(isset($Full_Name)) echo $Full_Name;?>" size=40 title= 'Name as recorded in Matriculation Certificate'><span id="errorName" style="color: Red; display: none">* Special Characters & integers are not allowed</span><br><span class=note><b><u>Note 1</u>:</b> Name as recorded in the Matriculation/Secondary Examination Certificate.<br><b><u>Note 2</u>:</b> Please do not use any prefix such as Mr. or Ms. etc.</span>
						</td>
					</tr>
					<tr>
					    <td valign="top">
					    	Gender<font color=red>*</font> :       
					    </td>
					    <td colspan="2">
						    <select name='gender' id='gender' >
							    <option value='Male' <?php if(isset($gender)&&$gender=='Male') echo "selected"; ?>>Male</option>
							    <option value='Female' <?php if(isset($gender)&&$gender=='Female') echo "selected"; ?>
							    >Female</option>
						    </select>        
					    </td>
					</tr>
					      
					<tr>
						<td valign="top">
					    	Date Of Birth<font color=red>*</font> :        
					    </td>
						<td colspan="2">
							<input type="text" id="date1" maxlength="10" name="date1" autocomplete="off" value="<?php if(isset($dob)) echo ($dob) ?>" onkeypress="return isNumber(event)"/>
					       	<span class="note">[Please enter the date in (dd-mm-YYYY) format.]</span>
						</td>
					</tr>
					       	      
					<tr>
						<td valign="top">
					    	Father's / Husband's Name<font color=red>*</font> :        
					    </td>
						<td colspan="2">
					        <input name=fname onkeypress="return isAlpha(event,errorFatherName);" ondrop="return false;" onpaste="return false;" type=text maxlength=30 size=40 id=fname value="<?php if(isset($fname)) echo $fname;?>"><span id="errorFatherName" style="color: Red; display: none">* Special Characters & integers are not allowed</span><br>
					        <span class="note">[Please do not use any prefix such as Shri or Dr. etc.]</span>    
					    </td>
					</tr>

					<tr>
						<td>
					    	Nationality<font color=red>*</font> :        
						</td>
					    <td colspan="2">
					    	<select name='Nationality' id='Nationality'> 
					        <option value='Indian'<?php if(isset($nation)&&$nation=='Indian') echo "selected"; ?>>Indian</option>
					        <option value='Outside India'<?php if(isset($nation)&&$nation=='Outside India') echo "selected"; ?>>Outside India</option>
					        </select> 
					    </td>
					</tr>
						  <!-- Modified 10 Jan 2011-->
					<tr>
						<td>
					    	Marital Status<font color=red>*</font> :       
					    </td>
					    <td colspan="2">
					    	<select name='Marital_status' id='Marital_status'>
					        <option value='null' >Select Marital Status</option>
					        <option value='Unmarried' <?php if(isset($marital)&&$marital=='Unmarried') echo "selected"; ?>>Single</option>
					        <option value='Married' <?php if(isset($marital)&&$marital=='Married') echo "selected"; ?>>Married</option></select>        
					    </td>
					</tr>
						  <!-- Modified 10 Jan 2011-->
					<tr>
						<td>
					    	Physically Challenged :
					    </td>
					    <td>
					    	<select name='Physically_challenged' id='Physically_challenged'>      <option value='No' <?php if(isset($pc)&&$pc=='No') echo "selected"; ?>>No</option>
							<option value='Yes'<?php if(isset($pc)&&$pc=='Yes') echo "selected"; ?>>Yes</option></select> 
						</td>
					</tr>

					<tr>
					    <td valign="top">
					    	Community<font color=red>*</font> :        
					    </td>
					    <td colspan="2">
					    	<select name="community" id="community" >
					        	<option value='General' <?php if(isset($minority)&&$minority=='General') echo "selected"; ?>>General</option>
					            <option value='OBC' <?php if(isset($minority)&&$minority=='OBC') echo "selected"; ?>>OBC</option>
					            <option value='SC' <?php if(isset($minority)&&$minority=='SC') echo "selected"; ?>>SC</option>
					            <option value='ST' <?php if(isset($minority)&&$minority=='ST') echo "selected"; ?>>ST</option>          </select><br>
					          	<span class="note">[Candidates belonging to OBCs but
					         	coming in the ' Creamy Layer ' and thus not being entitled to
					          	OBC reservation should indicate their community as ' General ']</span>        
						</td>
					</tr>
							  	  
					<tr>
						<td>
					    	If you belong to Minority :
						</td>
						<td nowrap="nowrap">
					  		<select name="Minority" id="Minority" onChange="setMinotry(this.value)">
							<option value="No" selected=selected>No</option>
							<option value="Yes" >Yes</option>
							</select>
						</td>
					</tr>

					<tr>
						<td width="40%" valign="top">
					    	Personal Email-ID<font color=red>*</font> :        
						</td>
					    <td width="60%" colspan="2">
					    	<input name=pemail type="email" maxlength=30 id="pemail" value="<?php if(isset($pemail)) echo $pemail;?>" size=40 title='Personal Email-ID' ><br>
						</td>
					</tr>

					<tr>
						<td width="40%" valign="top">
					    	Alternate Email-ID :        
						</td>
					    <td width="60%" colspan="2">
					    	<input name=aemail type="email" maxlength=30 id="aemail" onblur="checkMails()" value="<?php if(isset($aemail)) echo $aemail;?>" size=40 title='Alternate Email-ID' ><br>        
					   	</td>
					</tr>

					<tr class="formfieldheading">
						<td colspan="3">
					    	<strong>Present Address</strong>        
						</td>
					</tr>

					<tr>
						<td>&nbsp;</td>
					    <td colspan="2">
					    	<span class="note">
								[Do not enter your name again in the address field]         
							</span>        
						</td>
					</tr>

					<tr>
						<td>
					    	Address<font color=red>*</font> :        
					    </td>
					    <td colspan="2">
					    	<input name=Temp_Address type=text id=Temp_Address size=40 value="<?php if(isset($Temp_Address)) echo $Temp_Address;?>" maxlength=250 >        
					    </td>
					</tr>

					<tr>
						<td>
					    	District/City<font color=red>*</font> :        
						</td>
						<td colspan="2">
					    	<input name=T_District type=text id=T_District size=30 value="<?php if(isset($T_District)) echo $T_District;?>" maxlength=30 onkeypress='return isAlpha(event,errorTempDistrict)'><span id="errorTempDistrict" style="color: Red; display: none">* Special Characters & integers are not allowed</span>        
						</td>
					</tr>

					<tr>
						<td>
					    	State/UT<font color=red>*</font> :        
				    	</td>

				        <td colspan="2">
					    	<!-- <select name="T_state" id="T_state">
						    <option value="0">[ Select State ]</option>
						    <option value='1' <?php if(isset($tstate)&&$tstate=='1') echo "selected"; ?>>Andaman & Nicobar Island</option>
						    <option value='2'<?php if(isset($tstate)&&$tstate=='2') echo "selected"; ?>>Andhra Pradesh</option>
						    <option value='3'<?php if(isset($tstate)&&$tstate=='3') echo "selected"; ?>>Arunachal Pradesh</option>
						    <option value='4'<?php if(isset($tstate)&&$tstate=='4') echo "selected"; ?>>Assam</option>
						    <option value='5'<?php if(isset($tstate)&&$tstate=='5') echo "selected"; ?>>Bihar</option>
						    <option value='6'<?php if(isset($tstate)&&$tstate=='6') echo "selected"; ?>>Chandigarh</option>
						    <option value='7'<?php if(isset($tstate)&&$tstate=='7') echo "selected"; ?>>Chattisgarh</option>
						    <option value='8'<?php if(isset($tstate)&&$tstate=='8') echo "selected"; ?>>Dadar & Nagar Haveli</option>
						    <option value='9'<?php if(isset($tstate)&&$tstate=='9') echo "selected"; ?>>Daman & Diu</option>
						    <option value='10'<?php if(isset($tstate)&&$tstate=='10') echo "selected"; ?>>Delhi</option>
						    <option value='11'<?php if(isset($tstate)&&$tstate=='11') echo "selected"; ?>>Goa</option>
						    <option value='12'<?php if(isset($tstate)&&$tstate=='12') echo "selected"; ?>>Gujarat</option>
						    <option value='13'<?php if(isset($tstate)&&$tstate=='13') echo "selected"; ?>>Haryana</option>
						    <option value='14'<?php if(isset($tstate)&&$tstate=='14') echo "selected"; ?>>Himachal Pradesh</option>
						    <option value='15'<?php if(isset($tstate)&&$tstate=='15') echo "selected"; ?>>Jammu & Kashmir</option>
						    <option value='16'<?php if(isset($tstate)&&$tstate=='16') echo "selected"; ?>>Jharkhand</option>
						    <option value='17'<?php if(isset($tstate)&&$tstate=='17') echo "selected"; ?>>Karnataka</option>
						    <option value='18'<?php if(isset($tstate)&&$tstate=='18') echo "selected"; ?>>Kerela</option>
						    <option value='19'<?php if(isset($tstate)&&$tstate=='19') echo "selected"; ?>>Lakshadweep</option>
						    <option value='20'<?php if(isset($tstate)&&$tstate=='20') echo "selected"; ?>>Madhya Pradesh</option>
						    <option value='21'<?php if(isset($tstate)&&$tstate=='21') echo "selected"; ?>>Maharashtra</option>
						    <option value='22'<?php if(isset($tstate)&&$tstate=='22') echo "selected"; ?>>Manipur</option>
						    <option value='23'<?php if(isset($tstate)&&$tstate=='23') echo "selected"; ?>>Meghalaya</option>
						    <option value='24'<?php if(isset($tstate)&&$tstate=='24') echo "selected"; ?>>Mizoram</option>
						    <option value='25'<?php if(isset($tstate)&&$tstate=='25') echo "selected"; ?>>Nagaland</option>
						    <option value='26'<?php if(isset($tstate)&&$tstate=='26') echo "selected"; ?>>Orrisa</option>
						    <option value='27'<?php if(isset($tstate)&&$tstate=='27') echo "selected"; ?>>Others</option>
						    <option value='28'<?php if(isset($tstate)&&$tstate=='28') echo "selected"; ?>>Pondichery</option>
						    <option value='29'<?php if(isset($tstate)&&$tstate=='29') echo "selected"; ?>>Punjab</option>
						    <option value='30'<?php if(isset($tstate)&&$tstate=='30') echo "selected"; ?>>Rajasthan</option>
						    <option value='31'<?php if(isset($tstate)&&$tstate=='31') echo "selected"; ?>>Sikkim</option>
						    <option value='32'<?php if(isset($tstate)&&$tstate=='32') echo "selected"; ?>>Tamil Nadu</option>
						    <option value='33'<?php if(isset($tstate)&&$tstate=='33') echo "selected"; ?>>Tripura</option>
						    <option value='34'<?php if(isset($tstate)&&$tstate=='34') echo "selected"; ?>>Uttar Pradesh</option>
						    <option value='35'<?php if(isset($tstate)&&$tstate=='35') echo "selected"; ?>>Uttrakhand</option>
						    <option value='36'<?php if(isset($tstate)&&$tstate=='36') echo "selected"; ?>>West Bengal</option>
						    </select>  --> 
								
							<select name="T_state" id="T_state">
							    <option >[ Select State ]</option>
							    <option  <?php if(isset($tstate)&&$tstate=='Andaman & Nicobar Island') echo "selected"; ?>>Andaman & Nicobar Island</option>
							    <option <?php if(isset($tstate)&&$tstate=='Andhra Pradesh') echo "selected"; ?>>Andhra Pradesh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Arunachal Pradesh') echo "selected"; ?>>Arunachal Pradesh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Assam') echo "selected"; ?>>Assam</option>
							    <option <?php if(isset($tstate)&&$tstate=='Bihar') echo "selected"; ?>>Bihar</option>
							    <option <?php if(isset($tstate)&&$tstate=='Chandigarh') echo "selected"; ?>>Chandigarh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Chattisgarh') echo "selected"; ?>>Chattisgarh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Dadar & Nagar Haveli') echo "selected"; ?>>Dadar & Nagar Haveli</option>
							    <option <?php if(isset($tstate)&&$tstate=='Daman & Diu') echo "selected"; ?>>Daman & Diu</option>
							    <option <?php if(isset($tstate)&&$tstate=='Delhi') echo "selected"; ?>>Delhi</option>
							    <option <?php if(isset($tstate)&&$tstate=='Goa') echo "selected"; ?>>Goa</option>
							    <option <?php if(isset($tstate)&&$tstate=='Gujarat') echo "selected"; ?>>Gujarat</option>
							    <option <?php if(isset($tstate)&&$tstate=='Haryana') echo "selected"; ?>>Haryana</option>
							    <option <?php if(isset($tstate)&&$tstate=='Himachal Pradesh') echo "selected"; ?>>Himachal Pradesh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Jammu & Kashmir') echo "selected"; ?>>Jammu & Kashmir</option>
							    <option <?php if(isset($tstate)&&$tstate=='Jharkhand') echo "selected"; ?>>Jharkhand</option>
							    <option <?php if(isset($tstate)&&$tstate=='Karnataka') echo "selected"; ?>>Karnataka</option>
							    <option <?php if(isset($tstate)&&$tstate=='Kerela') echo "selected"; ?>>Kerela</option>
							    <option <?php if(isset($tstate)&&$tstate=='Lakshadweep') echo "selected"; ?>>Lakshadweep</option>
							    <option <?php if(isset($tstate)&&$tstate=='Madhya Pradesh') echo "selected"; ?>>Madhya Pradesh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Maharashtra') echo "selected"; ?>>Maharashtra</option>
							    <option <?php if(isset($tstate)&&$tstate=='Manipur') echo "selected"; ?>>Manipur</option>
							    <option <?php if(isset($tstate)&&$tstate=='Meghalaya') echo "selected"; ?>>Meghalaya</option>
							    <option <?php if(isset($tstate)&&$tstate=='Mizoram') echo "selected"; ?>>Mizoram</option>
							    <option <?php if(isset($tstate)&&$tstate=='Nagaland') echo "selected"; ?>>Nagaland</option>
							    <option <?php if(isset($tstate)&&$tstate=='Orrisa') echo "selected"; ?>>Orrisa</option>
							    <option <?php if(isset($tstate)&&$tstate=='Others') echo "selected"; ?>>Others</option>
							    <option <?php if(isset($tstate)&&$tstate=='Pondichery') echo "selected"; ?>>Pondichery</option>
							    <option <?php if(isset($tstate)&&$tstate=='Punjab') echo "selected"; ?>>Punjab</option>
							    <option <?php if(isset($tstate)&&$tstate=='Rajasthan') echo "selected"; ?>>Rajasthan</option>
							    <option <?php if(isset($tstate)&&$tstate=='Sikkim') echo "selected"; ?>>Sikkim</option>
							    <option <?php if(isset($tstate)&&$tstate=='Tamil Nadu') echo "selected"; ?>>Tamil Nadu</option>
							    <option <?php if(isset($tstate)&&$tstate=='Tripura') echo "selected"; ?>>Tripura</option>
							    <option <?php if(isset($tstate)&&$tstate=='Uttar Pradesh') echo "selected"; ?>>Uttar Pradesh</option>
							    <option <?php if(isset($tstate)&&$tstate=='Uttrakhand') echo "selected"; ?>>Uttrakhand</option>
								<option <?php if(isset($tstate)&&$tstate=='West Bengal') echo "selected"; ?>>West Bengal</option>          
							</select>

						</td>
					</tr>

					<tr>
					    <td>
					    	Pincode<font color=red>*</font> :        
				    	</td>
				        <td colspan="2">
					        <input name=T_pincode type="text" id="T_pincode" size=6 maxlength=6 value="<?php if(isset($T_pincode)) echo $T_pincode;?>" onkeypress="return isPinCode(event)" ><span id="errorPinCode" style="color: Red; display: none">* Pin Code Must be of length 6 </span>
				    	</td>
					</tr>

					<tr>
						<td>
					    	Phone with Area Code :        
				    	</td>
				        <td colspan="2">
							 +<input name=T_phone_number size="15" maxlength="15" type=text id=T_phone_number value="<?php if(isset($T_phone_number)) echo $T_phone_number;?>" onkeypress="return isPinCode(event)">
					 	</td>
				  	</tr>

					<tr>
				        <td>
							Mobile :        
						</td>
						<td colspan="2">
				    	    +<input name=T_mobile_number size="10" maxlength="10" type=text id=T_mobile_number value="<?php if(isset($T_mobile_number)) echo $T_mobile_number;?>" onkeypress="return isPinCode(event)">        
				    	</td>
				    </tr>

					<tr>
					</tr>

					<div id="addr">

						<tr class="formfieldheading">
							<td colspan="3">
					 			<strong>Permanent Address</strong>        
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td colspan="2">
						 		<span class="note">
						  			[Do not enter your name again in the address field]         
								</span>        
							</td>
						</tr>

						<tr>
							<td>
								Address<font color=red>*</font> : 
							</td>
							<td colspan="2">
								<input name=perm_Address type=text id=perm_Address size=40 value="<?php if(isset($perm_Address)) echo $perm_Address ;?>"
						 		maxlength=50 >        
						 	</td>
						</tr>

						<tr>
							<td>
						  		District/City<font color=red>*</font> :        
						  	</td>
							<td colspan="2">
								<input name=P_District type=text id=P_District size=40 value="<?php if(isset($P_District)) echo $P_District;?>" onkeypress="return isAlpha(event,errorPermDistrict)" maxlength=30 ><span id="errorPermDistrict" style="color: Red; display: none">* Special Characters & integers are not allowed</span>        
							</td>
						</tr>

						<tr>
							<td>
								State/UT<font color=red>*</font> :        
							</td>
							<td colspan="2">
								<!--<select name="P_state" id="P_state">
								<option value="0">[ Select State ]</option>
								<option value='1' <?php if(isset($pstate)&&$pstate=='1') echo "selected"; ?>>Andaman & Nicobar Island</option>
								<option value='2'<?php if(isset($pstate)&&$pstate=='2') echo "selected"; ?>>Andhra Pradesh</option>
								<option value='3'<?php if(isset($pstate)&&$pstate=='3') echo "selected"; ?>>Arunachal Pradesh</option>
								<option value='4'<?php if(isset($pstate)&&$pstate=='4') echo "selected"; ?>>Assam</option>
								<option value='5'<?php if(isset($pstate)&&$pstate=='5') echo "selected"; ?>>Bihar</option>
								<option value='6'<?php if(isset($pstate)&&$pstate=='6') echo "selected"; ?>>Chandigarh</option>
								<option value='7'<?php if(isset($pstate)&&$pstate=='7') echo "selected"; ?>>Chattisgarh</option>
								<option value='8'<?php if(isset($pstate)&&$pstate=='8') echo "selected"; ?>>Dadar & Nagar Haveli</option>
								<option value='9'<?php if(isset($pstate)&&$pstate=='9') echo "selected"; ?>>Daman & Diu</option>
								<option value='10'<?php if(isset($pstate)&&$pstate=='10') echo "selected"; ?>>Delhi</option>
								<option value='11'<?php if(isset($pstate)&&$pstate=='11') echo "selected"; ?>>Goa</option>
								<option value='12'<?php if(isset($pstate)&&$pstate=='12') echo "selected"; ?>>Gujarat</option>
								<option value='13'<?php if(isset($pstate)&&$pstate=='13') echo "selected"; ?>>Haryana</option>
								<option value='14'<?php if(isset($pstate)&&$pstate=='14') echo "selected"; ?>>Himachal Pradesh</option>
								<option value='15'<?php if(isset($pstate)&&$pstate=='15') echo "selected"; ?>>Jammu & Kashmir</option>
								<option value='16'<?php if(isset($pstate)&&$pstate=='16') echo "selected"; ?>>Jharkhand</option>
								<option value='17'<?php if(isset($pstate)&&$pstate=='17') echo "selected"; ?>>Karnataka</option>
								<option value='18'<?php if(isset($pstate)&&$pstate=='18') echo "selected"; ?>>Kerela</option>
								<option value='19'<?php if(isset($pstate)&&$pstate=='19') echo "selected"; ?>>Lakshadweep</option>
								<option value='20'<?php if(isset($pstate)&&$pstate=='20') echo "selected"; ?>>Madhya Pradesh</option>
								<option value='21'<?php if(isset($pstate)&&$pstate=='21') echo "selected"; ?>>Maharashtra</option>
								<option value='22'<?php if(isset($pstate)&&$pstate=='22') echo "selected"; ?>>Manipur</option>
								<option value='23'<?php if(isset($pstate)&&$pstate=='23') echo "selected"; ?>>Meghalaya</option>
								<option value='24'<?php if(isset($pstate)&&$pstate=='24') echo "selected"; ?>>Mizoram</option>
								<option value='25'<?php if(isset($pstate)&&$pstate=='25') echo "selected"; ?>>Nagaland</option>
								<option value='26'<?php if(isset($pstate)&&$pstate=='26') echo "selected"; ?>>Orrisa</option>
								<option value='27'<?php if(isset($pstate)&&$pstate=='27') echo "selected"; ?>>Others</option>
								<option value='28'<?php if(isset($pstate)&&$pstate=='28') echo "selected"; ?>>Pondichery</option>
								<option value='29'<?php if(isset($pstate)&&$pstate=='29') echo "selected"; ?>>Punjab</option>
								<option value='30'<?php if(isset($pstate)&&$pstate=='30') echo "selected"; ?>>Rajasthan</option>
								<option value='31'<?php if(isset($pstate)&&$pstate=='31') echo "selected"; ?>>Sikkim</option>
								<option value='32'<?php if(isset($pstate)&&$pstate=='32') echo "selected"; ?>>Tamil Nadu</option>
								<option value='33'<?php if(isset($pstate)&&$pstate=='33') echo "selected"; ?>>Tripura</option>
								<option value='34'<?php if(isset($pstate)&&$pstate=='34') echo "selected"; ?>>Uttar Pradesh</option>
								<option value='35'<?php if(isset($pstate)&&$pstate=='35') echo "selected"; ?>>Uttrakhand</option>
								<option value='36'<?php if(isset($pstate)&&$pstate=='36') echo "selected"; ?>>West Bengal</option>          </select>  -->
								<select name="P_state" id="P_state">
									<option >[ Select State ]</option>
									<option  <?php if(isset($pstate)&&$pstate=='Andaman & Nicobar Island') echo "selected"; ?>>Andaman & Nicobar Island</option>
									<option <?php if(isset($pstate)&&$pstate=='Andhra Pradesh') echo "selected"; ?>>Andhra Pradesh</option>
									<option <?php if(isset($pstate)&&$pstate=='Arunachal Pradesh') echo "selected"; ?>>Arunachal Pradesh</option>
									<option <?php if(isset($pstate)&&$pstate=='Assam') echo "selected"; ?>>Assam</option>
									<option <?php if(isset($pstate)&&$pstate=='Bihar') echo "selected"; ?>>Bihar</option>
									<option <?php if(isset($pstate)&&$pstate=='Chandigarh') echo "selected"; ?>>Chandigarh</option>
									<option <?php if(isset($pstate)&&$pstate=='Chattisgarh') echo "selected"; ?>>Chattisgarh</option>
									<option <?php if(isset($pstate)&&$pstate=='Dadar & Nagar Haveli') echo "selected"; ?>>Dadar & Nagar Haveli</option>
									<option <?php if(isset($pstate)&&$pstate=='Daman & Diu') echo "selected"; ?>>Daman & Diu</option>
									<option <?php if(isset($pstate)&&$pstate=='Delhi') echo "selected"; ?>>Delhi</option>
									<option <?php if(isset($pstate)&&$pstate=='Goa') echo "selected"; ?>>Goa</option>
									<option <?php if(isset($pstate)&&$pstate=='Gujarat') echo "selected"; ?>>Gujarat</option>
									<option <?php if(isset($pstate)&&$pstate=='Haryana') echo "selected"; ?>>Haryana</option>
									<option <?php if(isset($pstate)&&$pstate=='Himachal Pradesh') echo "selected"; ?>>Himachal Pradesh</option>
									<option <?php if(isset($pstate)&&$pstate=='Jammu & Kashmir') echo "selected"; ?>>Jammu & Kashmir</option>
									<option <?php if(isset($pstate)&&$pstate=='Jharkhand') echo "selected"; ?>>Jharkhand</option>
									<option <?php if(isset($pstate)&&$pstate=='Karnataka') echo "selected"; ?>>Karnataka</option>
									<option <?php if(isset($pstate)&&$pstate=='Kerela') echo "selected"; ?>>Kerela</option>
									<option <?php if(isset($pstate)&&$pstate=='Lakshadweep') echo "selected"; ?>>Lakshadweep</option>
									<option <?php if(isset($pstate)&&$pstate=='Madhya Pradesh') echo "selected"; ?>>Madhya Pradesh</option>
									<option <?php if(isset($pstate)&&$pstate=='Maharashtra') echo "selected"; ?>>Maharashtra</option>
									<option <?php if(isset($pstate)&&$pstate=='Manipur') echo "selected"; ?>>Manipur</option>
									<option <?php if(isset($pstate)&&$pstate=='Meghalaya') echo "selected"; ?>>Meghalaya</option>
									<option <?php if(isset($pstate)&&$pstate=='Mizoram') echo "selected"; ?>>Mizoram</option>
									<option <?php if(isset($pstate)&&$pstate=='Nagaland') echo "selected"; ?>>Nagaland</option>
									<option <?php if(isset($pstate)&&$pstate=='Orrisa') echo "selected"; ?>>Orrisa</option>
									<option <?php if(isset($pstate)&&$pstate=='Others') echo "selected"; ?>>Others</option>
									<option <?php if(isset($pstate)&&$pstate=='Pondichery') echo "selected"; ?>>Pondichery</option>
									<option <?php if(isset($pstate)&&$pstate=='Punjab') echo "selected"; ?>>Punjab</option>
									<option <?php if(isset($pstate)&&$pstate=='Rajasthan') echo "selected"; ?>>Rajasthan</option>
									<option <?php if(isset($pstate)&&$pstate=='Sikkim') echo "selected"; ?>>Sikkim</option>
									<option <?php if(isset($pstate)&&$pstate=='Tamil Nadu') echo "selected"; ?>>Tamil Nadu</option>
									<option <?php if(isset($pstate)&&$pstate=='Tripura') echo "selected"; ?>>Tripura</option>
									<option <?php if(isset($pstate)&&$pstate=='Uttar Pradesh') echo "selected"; ?>>Uttar Pradesh</option>
									<option <?php if(isset($pstate)&&$pstate=='Uttrakhand') echo "selected"; ?>>Uttrakhand</option>
									<option <?php if(isset($pstate)&&$pstate=='West Bengal') echo "selected"; ?>>West Bengal</option>          
								</select>
							</td>
						</tr>

						<tr>
							<td>
								Pincode<font color=red>*</font> :        
							</td>
							<td colspan="2">
								<input name=P_pincode type=text id=P_pincode size=6 maxlength=6 value="<?php if(isset($P_pincode)) echo $P_pincode;?>" onkeypress="return isNumber(event)">        
							</td>
						</tr>

						<tr>
							<td>
								Phone with Area Code :        
							</td>
							<td colspan="2">
								<!--<input name=area_code type=text id=area_code size=4 maxlength=5 value=''>  --> 
								+<input name=P_phone_number type=text id="P_phone_number" size="15" maxlength="15" value="<?php if(isset($P_phone_number)) echo $P_phone_number;?> "onkeypress="return isNumber(event)">        
							</td>
						</tr>

						<tr>
							<td>
								Mobile :        
							</td>
							<td colspan="2">
								+<input name="P_mobile_number" type="text" id="P_mobile_number" size="10" maxlength="10" value="<?php if(isset($P_mobile_number)) echo $P_mobile_number;?>"onkeypress="return isNumber(event)">        
							</td>
						</tr>

					</div>
				</table>
				<div align="center">
					<input type='submit' name='Save' value='Save' />
				</div>
			</form>
		</div>

		<div >
			<h2 >Academic Info</h2>
			<br>
			<center><strong>Please save your actions before you go to next TAB</strong></center>
			<form name="form3" method="post" action="academic_info.php">
			 	<p style="text-align:center;font-family:arial;color:black;font-size:24px;">Qualifications and Experience.</p>
			 	<!--<a style="text-align:left;font-family:arial;color:red;font-size:20px;" href='qualification.html'>Fill the details of qualifications</a><br>-->
				<table border="2" width="100%" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
			        <tr>
		                <td width="20%" bgcolor="#bdbdbd">&nbsp;&nbsp;<b>QUALIFICATION</b></td><td width="80%" bgcolor="#bdbdbd">&nbsp;&nbsp;Details of Universities/Institutions attended (from 10th standard onwards)#<br>
		        		</td>
		            </tr>        
		        </table>

		        <table border="0" width="100%" style="font-weight:bold;font-size:12px;font-family:Times New Roman", Times, serif;>
		       		<tr>
		       			<td>
		       				<font color="red">(Attested copies of certificates and mark sheets/grade cards will require if called for written test/Interview).</font>
						</td>
					</tr>
		        </table>

		        <table border="0" width="100%" style="font-weight:bold;font-size:12px;font-family:Times New Roman", Times, serif;>
		            <tr>
		                <td width="13%"><b>Exam Passed</b></td>
		                <td width="20%"><b>Univerity/College/Board</b></td>
		                <td width="15%"><b>Degree(with discipline)</b></td>
		                <td width="8%"><b>%/CGPA/CPI</b></td>
		                <td width="9%"><b>Grade Format</b></td>
		                <td width="10%"><b>Year of passing</b></td>
		            </tr>
		            <tr>
		                <td width="13%">Class 10th OR Equi.<font color="red"> *</font></td>
		                <td width="20%"><input required="required" class="validate[required]" type="text" name="univ_10" id="univ_10" value="<?php if(isset($univ_10)) echo $univ_10;?>" style="width:95%" maxlength="95" onkeypress="return isAlpha(event,errorTenthClass);" title="95 Characters" /><span id="errorTenthClass" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="15%"><input class="validate[required]" type="text" name="degree_10" id="degree_10" value="Class 10th OR Equi." style="width:93%"  readonly/></td>
		                
		                <td width="9%">
			                <select name="grade_10" id="grade_10" class="validate[required]">
								<option value="MAR-100"<?php if(isset($grade_10)&&$grade_10=="MAR-100") echo "selected"; ?>>% out of 100</option> 
								<option value="CGP-10"<?php if(isset($grade_10)&&$grade_10=="CGP-10") echo "selected"; ?>>CGPA out of 10</option>
								<option value="CPI-4"<?php if(isset($grade_10)&&$grade_10=="CPI-4") echo "selected"; ?>>CPI out of 4</option>
								<option value="CPI-8"<?php if(isset($grade_10)&&$grade_10=="CPI-8") echo "selected"; ?>>CPI out of 8</option>
							</select>
						</td>
		                
		                <td width="8%"><input type="text" name="marks_10" id="marks_10" value="<?php if(isset($marks_10))echo $marks_10;?>" style="width:87%" maxlength="6" onkeypress="return isPercentage(event)"  onblur="check(event);"/></td> 
		                <td width="10%"><input type="text" maxlength="4" name="year_10" id="year_10" value="<?php if(isset($year_10)) echo $year_10;?>" style="width:92%" onkeypress="return isPinCode(event)" title="4 Characters" /></td>    
		            </tr>
		            <tr>
		                <td width="13%">Class 12th OR Equi.<font color="red"> *</font></td>
		                <td width="20%"><input required="required" class="validate[required]" type="text" name="univ_12" id="univ_12" value="<?php if(isset($univ_12)) echo $univ_12;?>" style="width:95%" maxlength="95" title="95 Characters" onkeypress="return isAlpha(event,errorTwelfthClass);" /><span id="errorTwelfthClass" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="15%"><input class="validate[required]" type="text" name="degree_12" id="degree_12" value="Class 12th OR Equi." style="width:93%" readonly/></td>
		                
		            	<td width="9%">
			            	<select name="grade_12" id="grade_12" class="validate[required]">
				               	
					    		<option value="MAR-100"<?php if(isset($grade_12)&&$grade_12=="MAR-100") echo "selected"; ?>>% out of 100</option>
								<option value="CGP-10"<?php if(isset($grade_12)&&$grade_12=="CGP-10") echo "selected"; ?>>CGPA out of 10</option>
								<option value="CPI-4"<?php if(isset($grade_12)&&$grade_12=="CPI-4") echo "selected"; ?>>CPI out of 4</option>
								<option value="CPI-8"<?php if(isset($grade_12)&&$grade_12=="CPI-8") echo "selected"; ?>>CPI out of 8</option>
			 				</select>
		          		 </td>
		                
		                <td width="8%"><input  class="validate[required]" type="text" name="marks_12" id="marks_12" value="<?php if(isset($marks_12)) echo $marks_12;?>" style="width:87%" maxlength="6" onkeypress="return isPercentage(event)" onblur="check1(event);"/></td>
		                <td width="10%"><input type="text" maxlength="4" name="year_12" id="year_12" value="<?php if(isset($year_12)) echo $year_12;?>" style="width:92%" title="4 Characters" onkeypress="return isPinCode(event)"/></td>                
		            </tr>
		            <tr>
		                <td width="13%">Bachelor Degree or Equi.<font color="red"> *</font></td>
		                <td width="20%"><input class="validate[required]" type="text" name="bd_univ" id="bd_univ" value="<?php if(isset($univ_bd)) echo $univ_bd;?>" style="width:95%" maxlength="95" title="95 Characters" onkeypress="return isAlpha(event,errorBachelor);"/><span id="errorBachelor" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="15%"><input class="validate[required]" type="text" name="bd_degree" id="bd_degree" value="<?php if(isset($degree_bd)) echo $degree_bd;?>" style="width:93%" maxlength="45" title="45 Characters" onkeypress="return isAlpha(event,errorBachelorDegree);" /><span id="errorBachelorDegree" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
						<td width="9%">
							<select name="bd_grade" id="bd_grade" class="validate[required]">
			                   
			        			<option value="MAR-100"<?php if(isset($grade_bd)&&$grade_bd=="MAR-100") echo "selected"; ?>>% out of 100</option>
				  				<option value="CGP-10"<?php if(isset($grade_bd)&&$grade_bd=="CGP-10") echo "selected"; ?>>CGPA out of 10</option>	
			        			<option value="CPI-4"<?php if(isset($grade_bd)&&$grade_bd=="CPI-4") echo "selected"; ?>>CPI out of 4</option>
			        			<option value="CPI-8"<?php if(isset($grade_bd)&&$grade_bd=="CPI-8") echo "selected"; ?>>CPI out of 8</option>
			         		</select>
		         		</td>
		                <td width="8%"><input class="validate[required]" type="text" name="bd_marks" id="bd_marks" value="<?php if(isset($marks_bd)) echo $marks_bd;?>" style="width:87%" maxlength="6" onkeypress="return isPercentage(event)" onblur="check2(event);"/></td>
		                <td width="10%"><input class="validate[required]" type="text" name="bd_year" id="bd_year" value="<?php if(isset($year_bd)) echo $year_bd;?>" style="width:92%" maxlength="4" title="4 Characters" onkeypress="return isPinCode(event)" /></td>
		            </tr>
		            <tr>
		                <td width="13%">Masters degree or Equi.</td>
		                <td width="20%"><input type="text" name="pg_univ" id="pg_univ" value="<?php if(isset($univ_pg)) echo $univ_pg;?>" style="width:95%" maxlength="95" title="95 Characters" onkeypress="return isAlpha(event,errorMasters);"/><span id="errorMasters" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="15%"><input type="text" name="pg_degree" id="pg_degree" value="<?php if(isset($degree_pg)) echo $degree_pg;?>" style="width:93%" maxlength="45" title="45 Characters" onkeypress="return isAlpha(event,errorMastersDegree);" /><span id="errorMastersDegree" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="9%">
			                <select name="pg_grade" id="pg_grade">
			    				<option value="MAR-100"<?php if(isset($grade_pg)&&$grade_pg=="MAR-100") echo "selected"; ?>>% out of 100</option>
			  					<option value="CGP-10"<?php if(isset($grade_pg)&&$grade_pg=="CGP-10") echo "selected"; ?>>CGPA out of 10</option>
			    				<option value="CPI-4"<?php if(isset($grade_pg)&&$grade_pg=="CPI-4") echo "selected"; ?>>CPI out of 4</option>
			    				<option value="CPI-8"<?php if(isset($grade_pg)&&$grade_pg=="CPI-8") echo "selected"; ?>>CPI out of 8</option>
				 			</select>
		    			</td>
		                <td width="8%"><input type="text" name="pg_marks" id="pg_marks" value="<?php if(isset($marks_pg)) echo $marks_pg;?>" style="width:87%" maxlength="5" onkeypress="return isPercentage(event)" onblur="check3(event);"/></td>
		                <td width="10%"><input type="text" name="pg_year" id="pg_year" value="<?php if(isset($year_pg)) echo $year_pg;?>" style="width:92%" maxlength="4" title="4 Characters" onkeypress="return isPinCode(event)" /></td>
		            </tr>
					<tr>
		                <td width="13%">Others</td>
		                <td width="20%"><input type="text" name="o_univ" id="o_univ" value="<?php if(isset($univ_o)) echo $univ_o;?>" style="width:95%" maxlength="95" title="95 Characters" onkeypress="return isAlpha(event,errorOthers);" /><span id="errorOthers" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="15%"><input type="text" name="o_degree" id="o_degree" value="<?php if(isset($degree_o)) echo $degree_o;?>" style="width:93%" maxlength="45" title="45 Characters" onkeypress="return isAlpha(event,errorOthersDegree);" /><span id="errorOthersDegree" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
		                <td width="9%">
			                <select name="o_grade" id="o_grade">
						    	
			    				<option value="MAR-100"<?php if(isset($grade_o)&&$grade_o=="MAR-100") echo "selected"; ?>>% out of 100</option>
								<option value="CGP-10"<?php if(isset($grade_o)&&$grade_o=="CGP-10") echo "selected"; ?>>CGPA out of 10</option>	
			    				<option value="CPI-4"<?php if(isset($grade_o)&&$grade_o=="CPI-4") echo "selected"; ?>>CPI out of 4</option>
				        		<option value="CPI-8"<?php if(isset($grade_o)&&$grade_o=="CPI-8") echo "selected"; ?>>CPI out of 8</option>    
			    			</select>
		    			</td>
		                <td width="8%"><input type="text" name="o_marks" id="o_marks" value="<?php if(isset($marks_o)) echo $marks_o;?>" style="width:87%" maxlength="5" onkeypress="return isPercentage(event)" onblur="check4(event);"/></td>
		                <td width="10%"><input type="text" name="o_year" id="o_year" value="<?php if(isset($year_o)) echo $year_o;?>" style="width:92%" maxlength="4" title="4 Characters" onkeypress="return isPinCode(event)" /></td>	                    
		            </tr>
			   	</table>  
		        <br><br>
				<p style="text-align:left;font-family:arial;color:black;font-size:20px;">B.E/B.Tech/B.S/B.Sc/Other equivalent</p>
				<br></br>

				<table border = "1" cellspacing = "0">
					<th>Semester</th>
					<th>I</th>
					<th>II</th>
					<th>III</th>
					<th>IV</th>
					<th>V</th>
					<th>VI</th>
					<th>VII</th>
					<th>VIII</th>
					<th>IX</th>
					<th>X</th>
					<tr>
						<td>CGPA obtained(Out of 10)</td>
						<td><input type="text" name="bd_1" value="<?php if(isset($bd_1)) echo $bd_1;?>" min="0" maxlength="5" size="3" onkeypress="return isPercentage(event)" onblur="test(event);"></td>
						<td><input type="text" name="bd_2" value="<?php if(isset($bd_2)) echo $bd_2;?>" min="0" maxlength="5" size="3" onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_3" value="<?php if(isset($bd_3)) echo $bd_3;?>" min="0" maxlength="5" size="3" onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_4" value="<?php if(isset($bd_4)) echo $bd_4;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_5" value="<?php if(isset($bd_5)) echo $bd_5;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_6" value="<?php if(isset($bd_6)) echo $bd_6;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_7" value="<?php if(isset($bd_7)) echo $bd_7;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_8" value="<?php if(isset($bd_8)) echo $bd_8;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_9" value="<?php if(isset($bd_9)) echo $bd_9;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="bd_10" value="<?php if(isset($bd_10)) echo $bd_10;?>" min="0" maxlength="5" size="3"onkeypress="return isPercentage(event)"></td>
					</tr>
				</table>
				<br>
				<table border = "1" cellspacing = "0">
					<th>Aggregate / Grade</th>
					<th>Class</th>
					<tr>
						<td><input type="text" name="bd_agr"  maxlength="5"value="<?php if(isset($bd_agr)) echo $bd_agr;?>" onkeypress="return isPercentage(event)" ></td>
						<td><input type="text" name="bd_class" value="<?php if(isset($bd_class)) echo $bd_class;?>" maxlength=45 title="45 characters" onkeypress="return isAlphaNumeric(event,errorGradeClass);" ><span id="errorGradeClass" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
					</tr>
				</table>
				<br></br>

				<p style="text-align:left;font-family:arial;color:black;font-size:20px;">M.E/M.Tech/M.S/M.Sc/Other equivalent</p>
				<br></br>
				<table border = "1" cellspacing = "0">
					<th>Semester</th>
					<th>I</th>
					<th>II</th>
					<th>III</th>
					<th>IV</th>
					<tr>
						<td><p>CGPA obtained(Out of 10)</p></td>
						<td><input type="text" name="md_1" value="<?php if(isset($md_1)) echo $md_1;?>" min="0" maxlength="5"onkeypress="return isPercentage(event)"></td>
						<td><input type="text" name="md_2" value="<?php if(isset($md_2)) echo $md_2;?>" min="0" maxlength="5"onkeypress="return isPercentage(event)"></td>
				  		<td><input type="text" name="md_3" value="<?php if(isset($md_3)) echo $md_3;?>" min="0" maxlength="5"onkeypress="return isPercentage(event)"></td>
				  		<td><input type="text" name="md_4" value="<?php if(isset($md_4)) echo $md_4;?>" min="0" maxlength="5"onkeypress="return isPercentage(event)"></td>
					</tr>
				</table>
				<br>
				<table border = "1" cellspacing = "0">
					<th>Aggregate / Grade</th>
					<th>Class</th>
					<tr>
					  <td><input type="text" name="md_agr" value="<?php if(isset($md_agr)) echo $md_agr;?>" ></td>
					  <td><input type="text" name="md_class" value="<?php if(isset($md_class)) echo $md_class;?>" maxlength=45 title="45 characters" onkeypress="return isAlphaNumeric(event,errorGradeClass1);" ><span id="errorGradeClass1" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
					</tr>
				</table>
				<br></br>
				<p style="text-align:left;font-family:arial;color:black;font-size:20px;">Professional Experience<span id="errorOrg" style="color: Red; display: none">* Special Characters & integers are not allowed</span><span id="errorPeriod" style="color: Red; display: none">* Special Characters are not allowed</span></p>
				<br></br>

				<table border = "1"  cellspacing = "10" >
					<th>Organization Name</th>
					<th>Designation</th>
					<th>Period</th>
					<th>Nature of work</th>

					<tr>
						<td ><input type="text" name="org_1" value="<?php if(isset($org_1)) echo $org_1;?>" maxlength="95" onkeypress="return isAlphaNumeric(event,errorOrg);" ></td>
						<td ><input type="text" name="des_1" value="<?php if(isset($des_1)) echo $des_1;?>" maxlength="75" onkeypress="return isAlpha(event,errorOrg);" ></td>
						<td ><input type="text" name="per_1" value="<?php if(isset($per_1)) echo $per_1;?>" maxlength="10" onkeypress="return isAlphaNumeric(event,errorPeriod);" ></td>
						<td ><input type="text" name="work_1" value="<?php if(isset($work_1)) echo $work_1;?>" maxlength="45" onkeypress="return isAlpha(event,errorOrg);" ></td>
				  	</tr>
					<tr>
						<td><input type="text" name="org_2" value="<?php if(isset($org_2)) echo $org_2;?>" maxlength="95" onkeypress="return isAlphaNumeric(event,errorOrg);" ></td>
						<td><input type="text" name="des_2" value="<?php if(isset($des_2)) echo $des_2;?>" maxlength="75" onkeypress="return isAlpha(event,errorOrg);" ></td>
						<td><input type="text" name="per_2" value="<?php if(isset($per_2)) echo $per_2;?>" maxlength="10" onkeypress="return isAlphaNumeric(event,errorPeriod);" ></td>
						<td><input type="text" name="work_2" value="<?php if(isset($work_2)) echo $work_2;?>" maxlength="45" onkeypress="return isAlpha(event,errorOrg);" ></td>
					</tr>
					<tr>
						<td><input type="text" name="org_3" value="<?php if(isset($org_3)) echo $org_3;?>" maxlength="95" onkeypress="return isAlphaNumeric(event,errorOrg);"></td>
						<td><input type="text" name="des_3" value="<?php if(isset($des_3)) echo $des_3;?>" maxlength="75" onkeypress="return isAlpha(event,errorOrg);" ></td>
						<td><input type="text" name="per_3" value="<?php if(isset($per_3)) echo $per_3;?>" maxlength="10" onkeypress="return isAlphaNumeric(event,errorPeriod);" ></td>
						<td><input type="text" name="work_3" value="<?php if(isset($work_3)) echo $work_3;?>" maxlength="45" onkeypress="return isAlpha(event,errorOrg);" ></td>
					</tr>
					<tr>
						<td><input type="text" name="org_4" value="<?php if(isset($org_4)) echo $org_4;?>" maxlength="95" onkeypress="return isAlphaNumeric(event,errorOrg);"></td>
						<td><input type="text" name="des_4" value="<?php if(isset($des_4)) echo $des_4;?>" maxlength="75" onkeypress="return isAlpha(event,errorOrg);" ></td>
						<td><input type="text" name="per_4" value="<?php if(isset($per_4)) echo $per_4;?>" maxlength="10" onkeypress="return isAlphaNumeric(event,errorPeriod);" ></td>
						<td><input type="text" name="work_4" value="<?php if(isset($work_4)) echo $work_4;?>" maxlength="45" onkeypress="return isAlpha(event,errorOrg);" ></td>
					</tr>
					<tr>
						<td><input type="text" name="org_5" value="<?php if(isset($org_5)) echo $org_5;?>" maxlength="95" onkeypress="return isAlphaNumeric(event,errorOrg);" ></td>
						<td><input type="text" name="des_5" value="<?php if(isset($des_5)) echo $des_5;?>" maxlength="75" onkeypress="return isAlpha(event,errorOrg);" ></td>
						<td><input type="text" name="per_5" value="<?php if(isset($per_5)) echo $per_5;?>" maxlength="10" onkeypress="return isAlphaNumeric(event,errorPeriod);" ></td>
						<td><input type="text" name="work_5" value="<?php if(isset($work_5)) echo $work_5;?>" maxlength="45" onkeypress="return isAlpha(event,errorOrg);" ></td>
					</tr>
				</table>
				<br></br> 
		        <div align="center">
					<input type='submit' name='Save' value='Save' />
		        </div>
			</form>
		</div>

		<div>  
			<h2>Enclosures</h2>
			<div align="left">
				<center><strong>Please save your actions before you go to next TAB</strong></center>
				<form action="upload.php" method="post"
					enctype="multipart/form-data">
					<br>

					<large><u>Note</u></large><br>
					<small><font color=red>1)Please upload only .pdf or .png files only and not exceeding 1MB.</font></small><br>
					<small><font color=red>2)Uploaded files should be of the format application.number_filename.<br>Eg:DM14D001_DD.pdf<br /> Eg:DM14D001_SSLC.pdf <br> Eg:DM14D001_MS.pdf <br> Eg:DM14D001_CC.pdf <br> Eg:DM14D001_DC.pdf <br> Eg:DM14D001_GC.pdf <br> 
						Eg:DM14D001_PP.png <br>
						Eg:DM14D001_DS.png  </font>
					</small><br>
					<small><font color=red>3)File name is according to the uploaded file name. </font></small><br><br>
					<table>
						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_DD.pdf")){
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}				  
									else{
									    echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}		  
								?>
					 		</td>
							<td>
							<label for="file">Demand Draft<font color=red>*</font>:</label>
							</td>
							<td>
							<input type="file" name="file[]" id="file1" ></td>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_DD.pdf"))
									{
										echo $applnNo.'_DD.pdf';
										
										echo '<script type="text/javascript">
										//document.getElementById("file1").disabled=true;
										</script>';
									}
								?>
						 	</td>
					 	</tr>
						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_SSLC.pdf"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}

								?>
							</td>
							<td>
								<label for="file">SSLC 1stPage/Matriculation Certificate<font color=red>*</font>:</label>
							</td>
							<td>
								<input type="file" name="file[]" id="file2">
							</td>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_SSLC.pdf"))
									{
										echo $applnNo.'_SSLC.pdf';
										echo '<script type="text/javascript">
										//document.getElementById("file2").disabled=true;
										</script>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_MS.pdf"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}
								?>
							</td>
							<td>
								<label for="file">Marks Sheet/Grade Card<font color=red>*</font>:</label>
							</td>
							<td>
								<input type="file" name="file[]" id="file3">
							</td>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_MS.pdf"))
									{
										echo $applnNo.'_MS.pdf';

										echo '<script type="text/javascript">
										//document.getElementById("file3").disabled=true;
										</script>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_CC.pdf"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';}

								?>
							</td>
							<td>
								<label for="file">Community Certificate:</label>
							</td>
							<td>
								<input type="file" name="file[]" id="file4">
							</td>
							<td>
								<?php 
								if (file_exists("upload/" .$applnNo."_CC.pdf"))
								{
									echo $applnNo.'_CC.pdf';

									echo '<script type="text/javascript">
									//document.getElementById("file4").disabled=true;
									</script>';
								}
								?>
							</td>
						</tr>

						<tr>
							<td>

							</td>
							<td>
								<small>(For Applicable candidates<font color=red>*</font>) 
								</small><br>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_DC.pdf"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}

								?>
							</td>
							<td>
								<label for="file">Doctor's Certificate:</label></td>
							<td>
								<input type="file" name="file[]" id="file5"></td>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_DC.pdf"))
									{
										echo $applnNo.'_DC.pdf';

										echo '<script type="text/javascript">
										//document.getElementById("file5").disabled=true;
										</script>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td>
								
							</td>
							<td>
								<small>(For PH<font color=red>*</font>) </small><br>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_GC.pdf"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}

								?>
							</td>
							<td>
								<label for="file">GATE Score/NET/etc.,<font color=red>*</font>:</label>
							</td>
							<td>
								<input type="file" name="file[]" id="file6">
							</td>
							<td>
								<?php 
								if (file_exists("upload/" .$applnNo."_GC.pdf"))
								{
									echo $applnNo.'_GC.pdf';

									echo '<script type="text/javascript">
									//document.getElementById("file6").disabled=true;
									</script>';
								}
								?>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_PP.png"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}

								?>
							</td>
							<td>
								<label for="file">Passport Photo<font color=red>*</font>:</label>
							</td>
							<td>
								<input type="file" name="file[]" id="file7">
							</td>
							<td>
								<?php 
								if (file_exists("upload/" .$applnNo."_PP.png"))
								{
									echo $applnNo.'_PP.png';

									echo '<script type="text/javascript">
									//document.getElementById("file7).disabled=true;
									</script>';
								}
								?>
							</td>
						</tr>

						<tr>
							<td>
								<?php 
									if (file_exists("upload/" .$applnNo."_DS.png"))
									{
										echo '<img src="images/r.png" alt="Uploaded" height="20" width="20">';
									}

									else{
										echo '<img src="images/w.png" alt="Not uploaded" height="20" width="20">';
									}

								?>
							</td>
							<td>
								<label for="file">Digital Signature<font color=red>*</font>:</label></td>
							<td>
								<input type="file" name="file[]" id="file8">
							</td>
							<td>
							<?php 
								if (file_exists("upload/" .$applnNo."_DS.png"))
								{
									echo $applnNo.'_DS.png';

									echo '<script type="text/javascript">
									//document.getElementById("file8").disabled=true;
									</script>';
								}
							?>
							</td>
						</tr>
					</table>

					<div align="center">
					<input type='submit' name='Save' value='Save' />
					</div>
				</form>
			</div>
		</div>

		<div>
			<h2>Declaration</h2>
			<p>I hereby declare that I have carefully read the instructions and particulars relevant to this admission and that the entries made in this application form are correct to the best of my knowledge and belief. If selected for admission, I promise to abide by the rules and regulations of the Institute.
			I note that the decision of the institute is final in regard to selection for admission and assignment to a particular field of study.
			The Institute shall have the right to expel me from the Institute at any time after my admission, provided it is satisfied that I was admitted
			on false particulars furnished by me or my antecedents prove that my continuance in the Institute is not desirable. I agree that I shall abide by the
			decision of the Institute, which shall be final.</p><br />
			<div align="left"> 
				<large><u>Note: </u></large><br>
				<small><font color=red>1)Once you submit,the application cannot be modified further. <br> </font></small>
				<small><font color=red>2)Once you click the submit button, you will prompted to download the PDF copy of the application.</font></small><br>
			</div>
				<FORM ACTION="validate.php" METHOD=post>
					<table align="center">
						<tr>
							<td><label for="place">Place:</label></td>
							<td><input type="text" required="required" name="regplace" maxlength="45" title="45 characters" id="place" onkeypress="return isAlpha(event,errorDecPlace);"><span id="errorDecPlace" style="color: Red; display: none">* Special Characters & integers are not allowed</span></td>
						</tr>

						<tr><td><label for="date">Date:</label></td>
							<td><input type="text" name="regdate" autocomplete="off" disabled='true' value="<?php echo date("d/m/Y") ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit"> </td>
						</tr>
					</table>
				</form>
			</div>
		</div>

		<input type="hidden" value="<?php echo $applnNo ?>" name="appln_number">
		<script type="text/javascript">

			/*$(document).ready(function() {
		    	$('#savePersonInfo').click(function() {  
		      		alert("Please save our personal info before going to next tab !!!");
		    	});
			});*/

			function checkMails(){
				var pmail = $('#pemail').val();
				var amail = $('#aemail').val();
				if(pmail == amail){
					$('#aemail').val('');
					$('#aemail').focus();
				}
			}

			function validateEmail(emailField){
		        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		        if (reg.test(emailField.value) == false) 
		        {
		            alert('Invalid Email Address');
		            return false;
		        }

		        return true;
			}

			var specialKeys = new Array();
		    specialKeys.push(8); //Backspace
		    specialKeys.push(9); //Tab
		    specialKeys.push(46); //Delete
		    specialKeys.push(36); //Home
		    specialKeys.push(35); //End
		    specialKeys.push(37); //Left
		    specialKeys.push(39); //Right
		    function isAlphaNumeric(e,pid) {
		        var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
		        var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
		        pid.style.display = ret ? "none" : "inline";
		        return ret;
		    }

			function isAlpha(e,pid) {
		        var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
		        var ret = ((keyCode == 32) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
		        //console.log(pid);
		        pid.style.display = ret ? "none" : "inline";
		        return ret;
		    }

			function isNumber(evt) {
			    evt = (evt) ? evt : window.event;
			    var charCode = (evt.which) ? evt.which : evt.keyCode;
			    if (charCode > 31 && charCode!=45 &&(charCode < 48 || charCode > 57)) {
			        return false;
			    }
			    return true;
			}

			function isPinCode(evt) {
			    evt = (evt) ? evt : window.event;
			    var charCode = (evt.which) ? evt.which : evt.keyCode;
			    if (charCode > 31 &&(charCode < 48 || charCode > 57)) {
			        return false;
			    }
			    return true;
			}

			function isPercentage(evt) {
			    evt = (evt) ? evt : window.event;
			    var charCode1 = (evt.which) ? evt.which : evt.keyCode;
				
			    if (charCode1 > 31 && charCode1!=46 &&(charCode1 < 48 || charCode1 > 57)) {
			        return false;
			    }
			    return true;
				
				
			}

			function check(evt)
			{
				var t=document.getElementById('marks_10').value;
				
				if(t<0 || t>100)
				alert('Percentage cannot be greater than 100 or less than 0.');
			}
			function check1(evt){
				var t1=document.getElementById('marks_12').value;
				if(t1<0 || t1>100)
				alert('Percentage cannot be greater than 100 or less than 0.');
			}

			function check2(evt)
			{
				var t2=document.getElementById('bd_marks').value;
				
				var t4=document.getElementById('bd_grade').value;
				if(t4=="MAR-100")
				{
				    if(t2<0 || t2>100)
				      alert('Percentage cannot be greater than 100 or less than 0.');
				}
				
				else if(t4=="CGP-10")
				{
				    if(t2<0 || t2>10)
				      alert('CGP-10 cannot be greater than 10 or less than 0.');
				}
				else if(t4=="CPI-4")
				{
				    if(t2<0 || t2>4)
				      alert('CPI-4 cannot be greater than 4 or less than 0.');
				}
				
				else if(t4=="CPI-8")
				{
				    if(t2<0 || t2>8)
				      alert('CPI-8 cannot be greater than 8 or less than 0.');
				}
				
			}
			function check3(evt){
				
				var t5=document.getElementById('pg_grade').value;
				var t3=document.getElementById('pg_marks').value;
				
				if(t5=="MAR-100")
				{
				    if(t3<0 || t3>100)
				      alert('Percentage cannot be greater than 100 or less than 0.');
				}
				
				else if(t5=="CGP-10")
				{
				    if(t3<0 || t3>10)
				      alert('CGP-10 cannot be greater than 10 or less than 0.');
				}
				else if(t5=="CPI-4")
				{
				    if(t3<0 || t3>4)
				      alert('CPI-4 cannot be greater than 4 or less than 0.');
				}
				
				else if(t5=="CPI-8")
				{
				    if(t3<0 || t3>8)
				      alert('CPI-8 cannot be greater than 8 or less than 0.');
				}
				
				
			}


			function check4(evt){
				
				var t5=document.getElementById('o_grade').value;
				var t3=document.getElementById('o_marks').value;
				
				if(t5=="MAR-100")
				{
				    if(t3<0 || t3>100)
				      alert('Percentage cannot be greater than 100 or less than 0.');
				}
				
				else if(t5=="CGP-10")
				{
				    if(t3<0 || t3>10)
				      alert('CGP-10 cannot be greater than 10 or less than 0.');
				}
				else if(t5=="CPI-4")
				{
				    if(t3<0 || t3>4)
				      alert('CPI-4 cannot be greater than 4 or less than 0.');
				}
				
				else if(t5=="CPI-8")
				{
				    if(t3<0 || t3>8)
				      alert('CPI-8 cannot be greater than 8 or less than 0.');
				}
				
				
			}
			function fn()
			{
				
		        $('#addr :input').attr('disabled', true);
			    /*} else {
			        $('#addr :input').removeAttr('disabled');
			    } */  
				
			};

			window.pressed = function(){
			    var a = document.getElementById('aa');
			    if(a.value == "")
			    {
			        fileLabel.innerHTML = "Choose file";
			    }
			    else
			    {
			        var theSplit = a.value.split('\\');
			        fileLabel.innerHTML = theSplit[theSplit.length-1];
			    }
			};

			// BeginOAWidget_Instance_2138522: #TabbedPanels2

			var TabbedPanels2 = new Spry.Widget.TabbedPanels2("TabbedPanels2", {
				injectionType: "replace",
				widgetID: "TabbedPanels2",
				autoPlay: false,
				defaultTab: 0,
				enableKeyboardNavigation: true,
				hideHeader: true,
				tabsPosition: "top",
				event:"click",
				stopOnUserAction: true,
				displayInterval: 5000,
				minDuration: 300,
				maxDuration: 500,
				stoppedMinDuration: 100,
				stoppedMaxDuration: 200,
				plugIns:[]
			});

			// EndOAWidget_Instance_2138522
		</script>
	</body>
	 <!--<input type='submit' name='Save' value='Save' />-->
</html>
