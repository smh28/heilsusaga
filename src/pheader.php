<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Main title: "Heilsusaga Íslendinga" -->
        <title><?php echo "Heilsusaga Íslendinga"; ?></title> <!--$Title-->

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

        <div class="takePart">
            <div class="takePartItem">
             <h5>Rannsókn um heilsusögu Íslendinga</h5>
            </div>
            <div class="takePartItem">
             <button class="btn btn-default btn-sm">Taka þátt</button>
            </div>
         </div>




        <div  class="pageHead">

            <div class="banner-logo">
                <a href="login.php">
                    <img src="../images/Heilsusaga-isl-01-glaert.png" width="250px"/>  <!-- upphaflega var sett hæð: 372px -->
                </a>
            </div>


            <div class="banner-logo2" align="center">
                <a href="login.php">
                    <img src="../images/Heilsusaga_stort_glaert.png" width="200px"/>  <!-- upphaflega var sett hæð: 372px -->
                </a>
            </div>

            <div class="banner-logo3" align="center">
                <div>
                    <h1>Heilsusaga</h1>
                </div>
                <div>
                    <h4>Þekking í almannaþágu</h4>
                </div>

            </div>



            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#myNavBar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <ul class="nav navbar-nav">
                            <li><a href="participate.php"><img src="../images/Heilsusaga-isl-01-glaert.png" height="80px"/></a></li>
                        </ul>

                    </div>
                    <div class="navbar-collapse collapse" id="myNavBar">

                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="participate.php"><?php echo "Þátttaka" ?></a></li> <!-- Participate -->
                            <li><a href="about.php"><?php echo "Um rannsóknina" ?></a></li>  <!-- About -->
                            <li><a href="faq.php"><?php echo "Spurningar & svör" ?></a></li> <!-- QA -->
                            <li><a href="contact.php"><?php echo "Hafa samband" ?></a></li> <!-- Contact -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!--  <li><button class="btn btn-navbar">Taka þátt</button></li>  -->
                            <!-- <li><a href="#is" class="strong" alt="Íslenska" title="Skipta yfir í íslensku">Íslenska</a></li> -->
                            <li><a href="#en" alt="English" title="change to English"><?php echo "English" ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>










        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


    </body>

</html>
