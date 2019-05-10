<?php
require_once "cabecalho.php";
?>


<div class="container" id="fundoCarousel">
    <div id="demo" class="carousel slide imgCarousel" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/img1.jpg" style="border-radius: 10px;">
            </div>
            <div class="carousel-item">
                <img src="imagens/img2.jpg" style="border-radius: 10px;"> 
            </div>
            <div class="carousel-item">
                <img src="imagens/img3.jpg" style="border-radius: 10px;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>


<?php
require_once "rodape.php";
?>
</html>