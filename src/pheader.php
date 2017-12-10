<!DOCTYPE html>
 <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon for the page -->

        <link rel="shortcut icon" href="/images/favicon.ico"/>

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Main title: "Heilsusaga Íslendinga" -->
        <title><?php echo "Heilsusaga Íslendinga"; ?></title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
        <link href="css/main.css" rel="stylesheet">

    </head>

    <body>

       <?php
       /* Attaches the class "active" to the current/active menu link,
       while keeping all other menu links with the class "unactive" */
           $participate = "unactive";
           $about = "unactive";
           $faq = "unactive";
           $contact = "unactive";

           $menuLinkName = basename($_SERVER['PHP_SELF'], ".php");
           if($menuLinkName == "participate") {
               $participate = "active";
           } else if($menuLinkName == "about") {
               $about = "active";
           } else if($menuLinkName == "faq") {
           $faq = "active";
           } else if($menuLinkName == "contact") {
               $contact = "active";
           }
       ?>


       <div  class="pageHead">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#myNavBar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><img src="../images/Heilsusaga-isl-01-glaert.png" height="80px"/></a></li>
                        </ul>

                    </div>
                    <div class="navbar-collapse collapse" id="myNavBar">

                        <ul class="nav navbar-nav navbar-center">
                            <li class="<?php echo $participate ?>"><a href="index.php"><?php echo $lang['navbar_participate']; ?></a></li>
                            <li class="<?php echo $about ?>"><a href="about.php"><?php echo $lang['navbar_about']; ?></a></li>
                            <li class="<?php echo $faq ?>"><a href="faq.php"><?php echo $lang['navbar_faq']; ?></a></li>
                            <li class="<?php echo $contact ?>"><a href="contact.php"><?php echo $lang['navbar_contact']; ?></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php Print($lang['navbar_getLang']); ?>"
                                   alt="<?php Print($lang['navbar_language']); ?>"
                                   title="<?php Print($lang['navbar_titleLang']); ?>">
                                    <?php Print($lang['navbar_language']); ?>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </nav>



        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


    </body>

</html>
