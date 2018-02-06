<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wine Boottle <?=$title?></title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/business-casual.css" rel="stylesheet">
    <link href="<?=$styles?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <nav class="navbar navbar-default nav-height" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="cart">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
                        </li>
                        <li>
                            <a href="wish_list">Wish List <span class="glyphicon glyphicon-heart"></span></a>
                        </li>
                        <li>
                            <a href="chek">Chek-in <span class="glyphicon glyphicon-ok"></span></a>
                        </li>
                        <li>
                            <a href="enter">Enter <span class="glyphicon glyphicon-log-in"></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




    <div class="brand">Wine Boottle</div>
    <div class="address-bar">Kiev, Ukraine | Some street | (067)1234567 | Mon-Sun 9.00-21.00</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#">Alcogol Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="main">Home</a>
                    </li>
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Online Store<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                     <li><a href="wine">Wine</a></li>
                     <li><a href="cognac">Cognac</a></li>
                     <li><a href="liqueur">Liqueur</a></li>
                     <li><a href="champagne">Champagne</a></li>
                     </li>
                     </ul>
                    <li>
                        <a href="blog">Blog</a>
                    </li>
                    <li>
                        <a href="feedback">Feedback</a>
                    </li>
                    <li>
                        <a href="contacts">Contacts</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <article>
        <?php createContent();   ?>
        </article>
    <footer>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Alina & Alex 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script <?=$script?>></script>
    <!-- Script to Activate the Carousel -->
<!--     <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script> -->

</body>

</html>
