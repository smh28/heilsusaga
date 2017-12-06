<?php
    require 'language/define_lang.php';
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Main title, i.e. "Heilsusaga Íslendinga" -->
        <title><?php echo "Heilsusaga Íslendinga"; ?></title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
            require 'pheader.php';
        ?>


        <div class="mainSection">
            <div class="mainImage">
                <img src="../images/KRI_naeringarfr_151015_010.jpg" width=100%>
            </div>
            <div class="titleTextBox">
                <div class="textTitle">
                    <h1><?php echo $lang['contact_title']; ?></h1>
                </div>
                <div class="textBox">
                    <p><?php echo $lang['contact_main_#1text']; ?></p>
                    <p><?php echo $lang['contact_main_#2text']; ?></p>
                </div>
            </div>
        </div>





        <div  class="pageFoot">

            <div class="socialMedia">

            </div>

            <div class="logoFoot">
                <img src="../images/hi_logo_positiv_is_vert.png" width="145px" height="100px;"/>
            </div>

        </div>





        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


    </body>

</html>
