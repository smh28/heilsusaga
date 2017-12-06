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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $(".toggler").click(function(){
                    $(this).next().find("p").toggle(250);
                    return false;
                });
            });
        </script>


    </head>

    <body>

      <?php
        require 'pheader.php';
      ?>




      <div class="mainSection">
          <div class="mainImage">
              <img src="../images/_KRI4805.jpg" width="100%">

          </div>
          <div class="mainTitles">

              <div class="titles">
                  <h1><?php echo $lang['about_title']; ?></h1>
              </div>


              <a href="#" class="toggler"><h3><?php echo $lang['about_#1title']; ?></h3></a>
              <div>
                  <p class="hideItem"><?php echo $lang['about_#1text']; ?></p>
              </div>

              <a href="#" class="toggler"><h3><?php echo $lang['about_#2title']; ?></h3></a>
              <div>
                  <p class="hideItem"><?php echo $lang['about_#2text']; ?></p>
              </div>

              <a href="#" class="toggler"><h3><?php echo $lang['about_#3title']; ?></h3></a>
              <div>
                  <p class="hideItem"><?php echo $lang['about_#3text']; ?></p>
              </div>

              <a href="#" class="toggler"><h3><?php echo $lang['about_#4title']; ?></h3></a>
              <div>
                  <p class="hideItem"><?php echo $lang['about_#4text']; ?></p>
              </div>
              <a href="#" class="toggler"><h3><?php echo $lang['about_#5title']; ?></h3></a>
              <div>
                  <p class="hideItem"><?php echo $lang['about_#5text']; ?></p>
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
