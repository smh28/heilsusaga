<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Main title, i.e. "Heilsusaga Íslendinga" -->
    <title><?php echo "Heilsusaga Íslendinga"; ?></title> <!--$Title-->

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
        <img src="../images/KRI_naeringarfr_151103_001.jpg" width="100%">

    </div>
    <div class="mainTitles">

        <div class="titles">
            <h1><?php echo "Spurt og svarað" ?></h1>
        </div>


        <a href="#" class="toggler"><h3>Hvernig get ég tekið þátt?</h3></a>
        <div>
            <p class="hideItem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at massa eget sem efficitur consectetur. Maecenas at varius nunc. Fusce sagittis orci ante, ut hendrerit nulla viverra porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent eget elit vel purus faucibus vehicula et a purus. Morbi nulla magna, aliquam a orci ut, dapibus elementum turpis. Integer vitae nibh viverra, pharetra velit ut, tempus mi. Quisque id justo rutrum, semper arcu ut, rhoncus libero. Phasellus lectus dolor, rutrum eu ex et, consequat elementum mi. Nulla facilisi.</p>
        </div>

        <a href="#" class="toggler"><h3><?php echo "Hvað felst í þátttöku?" ?></h3></a>
        <div>
            <p class="hideItem">Donec mauris orci, sollicitudin quis porta id, interdum id nulla. Nam vel massa nec mauris dictum scelerisque sed at neque. In ut pellentesque erat, vitae efficitur nulla. Pellentesque eget nunc condimentum, maximus ligula et, semper libero. Praesent eget elit vel purus faucibus vehicula et a purus. Morbi nulla magna, aliquam a orci ut, dapibus elementum turpis. Integer vitae nibh viverra, pharetra velit ut, tempus mi. Quisque id justo rutrum, semper arcu ut, rhoncus libero. Phasellus lectus dolor, rutrum eu ex et, consequat elementum mi. Nulla facilisi.</p>
        </div>

        <a href="#" class="toggler"><h3><?php echo "Hverjir geta tekið þátt?" ?></h3></a>
        <div>
            <p class="hideItem">Etiam metus augue, gravida at ante id, dapibus vestibulum diam. Mauris ac dignissim elit. Ut non malesuada nulla. Duis aliquam magna lectus, sit amet hendrerit dui dignissim eu. Proin a iaculis elit. Donec condimentum gravida turpis. Nulla blandit tortor et felis rutrum luctus. Duis tincidunt augue ut ipsum maximus porttitor. Aliquam vehicula erat vel ex venenatis scelerisque. Pellentesque pulvinar dui quis velit aliquam elementum. Integer eu mi sagittis, ullamcorper libero ut, mattis lacus. Suspendisse eu suscipit leo, varius laoreet metus. Praesent eget elit vel purus faucibus vehicula et a purus. Morbi nulla magna, aliquam a orci ut, dapibus elementum turpis. Integer vitae nibh viverra, pharetra velit ut, tempus mi. Quisque id justo rutrum, semper arcu ut, rhoncus libero. Phasellus lectus dolor, rutrum eu ex et, consequat elementum mi. Nulla facilisi. </p>
        </div>

        <a href="#" class="toggler"><h3><?php echo "Hvaða aðilar koma að rannsókninni?" ?></h3></a>
        <div>
            <p class="hideItem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus felis eget odio ultricies, at congue odio interdum. Vivamus aliquam tempus nulla, non facilisis odio efficitur id. Vivamus ornare nulla vitae laoreet cursus. Maecenas condimentum libero in massa bibendum, non condimentum massa eleifend. Donec tempus tortor quam, vel bibendum quam posuere non. Nam lobortis arcu a pulvinar mattis. Praesent accumsan metus malesuada iaculis vehicula. Praesent commodo erat nec nulla feugiat, nec vehicula quam condimentum. Sed vitae consectetur lectus. </p>
        </div>
        <a href="#" class="toggler"><h3><?php echo "Hvað ef ég vil hætta þátttöku?" ?></h3></a>
        <div>
            <p class="hideItem">Integer eu diam varius nisl faucibus rutrum. Phasellus ut orci ullamcorper, bibendum mi a, dignissim lorem. Nulla id tincidunt sem. Maecenas vulputate sapien tellus, in laoreet est dictum vel. In venenatis mi leo, in faucibus tellus consectetur ut. Nunc non porttitor nulla, sit amet convallis metus. Etiam imperdiet tortor ac sapien pretium consequat. Fusce in fringilla arcu. Etiam sodales ullamcorper mi. Praesent ut faucibus ex, eget aliquam enim. Nulla elementum nisl in nisi pretium, ac mollis arcu volutpat. Suspendisse vitae sapien mauris.</p>
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
