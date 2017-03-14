<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="STYLESHEET" type="text/css" href="CSS_Home.css" />
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Online Job Portal</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
<div id="di">
    <header id="head">
        <h1> ONLINE JOB PORTAL </h1>
    </header>
    <nav class="navbar navbar-inverse navbar-top-fixed">

        <div class="container-fluid">
         <div class="navbar-header">
             <a href="#" class="navbar-brand">Job Portal</a>
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
         </div>
            <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav">

                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="About.html">About Us</a></li>
                <li><a href="contact.html">New Trend</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jobs
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">IT-jobs</a></li>
                        <li><a href="#">Mechanical</a></li>
                        <li><a href="#">Chemical-Engg</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
               
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
        </div>
    </nav>

</div>
<div class="container-fluid">
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phoneno' >Phone No.*:</label><br/>
    <input type='text' name='phoneno' id='phoneno' value='<?php echo $fgmembersite->SafeDisplay('phoneno') ?>' maxlength="50" /><br/>
    <span id='register_phoneno_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <label for='registrationtype'>Registration Type:</label><br/>
    <input type="radio" name="registrationtype" id="registrationtype" value='jobseeker' maxlength="50" />
    <label1 for='registrationtype' style="padding: 10px;">Job Seeker</label1>
    <input type="radio" name="registrationtype" id="registrationtype"  value='jobprovider' maxlength="50" />
    <label1 for='registrationtype' style="padding: 10px;">Job Provider</label1><br/>
    <span id='register_registrationtype_errorloc' class='error'></span>

</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
</div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("phoneno","req","Please provide a phoneno");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

    frmvalidator.addValidation("registrationtype","selectradio","Please select registrationtype");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>
