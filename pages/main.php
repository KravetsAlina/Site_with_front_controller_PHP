<?php
$title = "Главная";
$script = "resources/scripts/main.js";
$styles = "resources/styles/main.css";
function createContent() {
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="resources/img/slide-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="resources/img/slide-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="resources/img/slide-3.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">Our Alcogol Store</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>Best alcogol from
                        <strong>Wine Bootle</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Почему именно
                    <strong>Wine Bootle</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="resources/img/intro-pic.jpg" alt="">
                <hr class="visible-xs">
                <p>Наш интернет-магазин алкоголя предлагает самый обширный ассортимент алкогольных напитков в Украине, в котором каждый ценитель найдет что-то по своему вкусу. Тихие и игристые вина, эксклюзивные ликеры, вермуты, бренди, виски, ром, текила – это далеко не все элитные алкогольные напитки, представленные в каталоге нашей продукции. </p>
                <p>Купить алкогольные напитки на Wine Bootle очень легко.  Вам больше не придется тратить драгоценное время, посещая один за другим специализированные магазины в поисках любимой марки или сорта. Мы разработали интуитивно понятный интерфейс, который позволяет легко перемещаться по основным категориям сайта, а найдя «ту самую» бутылку – быстро оформить заказ. </p>
                <p>Мы отвечаем за качество каждого товара в нашем онлайн-каталоге. Сотрудничество с проверенными и надежными поставщиками, которых отличает безукоризненная репутация – наше кредо. Все представленные здесь алкогольные напитки имеют сертификаты качества и соответствующие документы.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Lorem ipsum dolor sit amet
                    <strong>Wine Bootle Alcogol Store</strong>
                </h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
<?php
}
?>

