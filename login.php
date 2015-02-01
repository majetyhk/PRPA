<!--
*********************************************************************
      login.php : Login to access the forms 

      Inputs :  Username
                Password
      Outputs : NIL
      Buttons : Submit
**********************************************************************
-->

<!--*****************************SUBMIT BUTTON*************************-->
<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("forms.php");
   }
}
?>
<!--****************************************************************-->

<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Login</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <?php include 'header.php' ?>
  </head>

  <body>
    <!--*********************NAVIGATION BAR****************************-->
    <ul id="nav">
        <?php include 'menu.php' ?>
    </ul>
    <!--***************************************************************-->

    <div id="page" class="container">
      <!--***********************LOGO**********************************-->
      <div id="logo">
    		<img src="images/logo.jpg" width="180" height="150" alt="IIITD&M logo" />
    	</div>
      <!--*************************************************************-->

    	<div id='fg_membersite'>
        <!--********************LOGIN FORM*****************************-->
        <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
          <fieldset >
            <legend>Login</legend>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <div class='short_explanation'>* required fields</div>
            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
            
            <div class='container'>
              <label for='username' >UserName*:</label><br/>
              <input type='text' name='userName' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
              <span id='login_username_errorloc' class='error'></span>
            </div>

            <div class='container'>
              <label for='password' >Password*:</label><br/>
              <input type='password' name='password' id='password' maxlength="50" /><br/>
              <span id='login_password_errorloc' class='error'></span>
            </div>
            
            <div class='container'>
              <input type='submit' name='Submit' value='Submit' />
            </div>
            
            <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
          </fieldset>
        </form>
        <!--*************************************************************-->
        <!-- client-side Form Validations:
        Uses form validation script from JavaScript-coder.com-->

        <!--**************INPUT FIELDS VALIDATION*************************-->
        <script type='text/javascript'>
            var frmvalidator  = new Validator("login");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("username","req","Please provide your username");
            frmvalidator.addValidation("password","req","Please provide the password");
        </script>
        <!--**************************************************************-->
     </div>

  </body>

  <!--*****************************FOOTER********************************-->
  <?php include 'copyright.php' ?>
  <!--*******************************************************************-->

</html>
