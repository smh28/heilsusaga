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

            $("#toggle3").click(function(){
                $("#p3").toggle();
            });
            $("#toggle4").click(function(){
                $("#p4").toggle();
            });
        });
    </script>

    <script>
        $(document).on("click", "a.toggler", function(){
            $(this).next().toggle(250);
        });
    </script>



</head>


<body>

<h1>Sýna og fela hnapp</h1>







<h1>Sýna og fela texta með titilfyrirsögnum</h1>

<div>




    <a href="#toggle3" id="toggle3"><h3>Fyrirsögn 1</h3></a>
    <p id="p3">If you click on the "Hide" button, I will disappear.</p>

    <a href="#toggle4" id="toggle4"><h3>Fyrirsögn 2</h3></a>
    <p id="p4">This is another text that will toogle too</p>



</div>



</body>
</html>

