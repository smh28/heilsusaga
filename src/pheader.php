<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Main title, i.e. "Heilsusaga Íslendinga" -->
        <title><?php echo "Heilsusaga Íslendinga"; ?></title> <!--$Title-->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/main.css" rel="stylesheet">
    </head>

    <body>


        <div  class="pageHead">

            <div class="banner-logo">
                <a href="login.php">
                    <img src="../images/Heilsusaga-isl-01-glaert.png" width="372px"/>
                </a>
            </div>





            <nav class="navbar navbar-default custom-navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#is"><?php echo "Íslenska" ?></a></li>
                        <li><a href="#en"><?php echo "English" ?></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="participate.php"><?php echo "Þátttaka" ?></a></li> <!-- Participate -->
                        <li><a href="about.php"><?php echo "Um rannsóknina" ?></a></li>  <!-- About -->
                        <li><a href="#faq"><?php echo "Spurningar & svör" ?></a></li> <!-- QA -->
                        <li><a href="contact.php"><?php echo "Hafa samband" ?></a></li> <!-- Contact -->
                    </ul>
                </div>
            </nav>










        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


    </body>

</html>
