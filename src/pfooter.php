<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main title, i.e. "Heilsusaga Íslendinga" -->
    <title><?php echo "Heilsusaga Íslendinga"; ?></title> <!--$Title-->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/main.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>




    <div  class="pageFoot">

        <div>
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Your like button code -->
            <div class="fb-like"
                 data-href="http://www.your-domain.com/your-page.html"
                 data-layout="standard"
                 data-action="like"
                 data-show-faces="true">
            </div>


            <a href="https://twitter.com/share?url=http://www.hi.heilsusaga.is/" title="Twitter" class="btn btn-twitter btn-lg"><i class="fa fa-twitter fa-fw"></i> Deila á Twitter</a>

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
