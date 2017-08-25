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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script>
        $(document).ready(function(){
            $(".toggler").click(function(){
                $(this).next().find("p").toggle(250);
            });
        });
    </script>



</head>

<body>



    <?php
    require 'pheader.php';
    ?>




<div class="mainSection">
    <div>
        <img src="../images/KRI_naeringarfr_151103_001.jpg" width="100%">

    </div>
    <div class="mainTitles">



        <a href="#" class="toggler"><h3>Fyrirsögn 1</h3></a>
        <div>
        <p>If you click on the "Hide" button, I will disappear.</p>
        </div>

        <a href="#" class="toggler"><h3>Fyrirsögn 2</h3></a>
        <div>
        <p>This is another text that will toogle too</p>
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




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>

</html>
