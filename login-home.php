<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite1.css">
      <link rel="STYLESHEET" type="text/css" href="CSS_Home.css" />

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
                <li><a href="contact.html">News</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jobs
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">IT-jobs</a></li>
                        <li><a href="#">Mechanical</a></li>
                        <li><a href="#">Chemical-Engg</a></li>
                    </ul>
                </li>
                <li><a href="news.html">Contact</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Welcome <?= $fgmembersite->UserFullName(); ?>!
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="change-pwd.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        </ul>
                </li>

                

            </ul>
            </div>
        </div>
    </nav>

</div>


<div id='fg_membersite_content'>
<h2>Home Page</h2>

</div>
</body>
</html>
