<?php
    require 'language/define_lang.php'
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <meta property="og:url"                content="https://heilsusaga.herokuapp.com/" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="Heilsusaga Íslendinga" />
        <meta property="og:description"        content="Rannsókn um heilsusögu Íslendinga" />
        <meta property="og:image"              content="https://heilsusaga.herokuapp.com/src/images/Heilsusaga-is-02-glaert.png" />
        <meta property="og:image:width"        content="300" />

        <!-- Main title, i.e. "Heilsusaga Íslendinga" -->
        <title><?php echo "Heilsusaga Íslendinga"; ?></title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <?php
            require 'pheader.php';
        ?>

        <div class="mainSection">

            <div class="mainImage">
                <img src="../images/KRI_naeringarfr_151103_001.jpg" width=100%>
            </div>

            <div class="titleTextBox">

                <div class="auglysing">
                    <p><?php echo $lang['part_main_auglysing']; ?></p>
                </div>

                <div class="textTitle">
                    <h1><?php echo $lang['part_main_title']; ?></h1>
                </div>
                <div class="textBox">
                    <p><?php echo $lang['part_main_textbox']; ?></p>
                    <button class="btn btn-default btn-lg"><a href="https://heilsusaga.tf.loftfar.is/login"><?php echo $lang['part_main_button']; ?></a></button>
                </div>
            </div>

        </div>

        <div class="loginInfo">
            <span class="loginInfoItem">
                <h4><?php echo $lang['part_bottom_titleAboutStudy']; ?></h4>
                <p class="readMore"><?php echo $lang['part_bottom_aboutStudy']; ?></p>
            </span>
            <span class="loginInfoItem">
                <h4><?php echo $lang['part_bottom_titleWhoCanPart']; ?></h4>
                <p class="readMore"><?php echo $lang['part_bottom_whoCanPart']; ?></p>
            </span>
            <span class="loginInfoItem">
                <h4><?php echo $lang['part_bottom_titleHowToPart']; ?></h4>
                <p class="readMore"><?php echo $lang['part_bottom_howToPart']; ?>
                </p>

            </span>
        </div>


        <div class="socialMedia">
            <h4>Deildu þessari vefsíðu:</h4>

            <div class="fb-share-button socialMediaItem" data-href="https://heilsusaga.herokuapp.com/" data-size="small" data-mobile-iframe="true">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                </a>
            </div>

            <div class="socialMediaItem">
                <a href="https://twitter.com/share?url=https://heilsusaga.herokuapp.com/" title="Twitter" class="btn btn-twitter btn-sm"><i class="fa fa-twitter fa-fw"></i> Share
                </a>
            </div>
        </div>

        <div  class="pageFoot">

            <div class="logoFoot">
                <img src="../images/hi_logo_positiv_is_vert.png" width="145px" height="100px;"/>
            </div>

        </div>






        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.collapser.min.js"></script>

        <!-- Read more / read less toggle -->
        <script>
            var userLang = "<?php Print($_SESSION['lang']); ?>";
            console.log("userLang is: " + userLang);
            $('.readMore').collapser({
                mode: 'chars',
                truncate: 300,
                effect: 'slideDown',
                showText: '<?php Print($lang['part_bottom_ShowMore']); ?>',
                hideText: '<?php Print($lang['part_bottom_ShowLess']); ?>'
            });
        </script>


    </body>

</html>