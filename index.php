<?php
    $_SESSION['user'] ? $view = 'login' : $view = 'login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Анкета</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header role="banner" class="navbar navbar-fixed-top navbar-default">
    <div >
        <div class="navbar-header">
            <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="navbar-default side-collapse in">
            <nav role="navigation" class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#Home"><b>АНКЕТА для администрации организации образования</b></a></li>
                    <?php
                    if($view == 'anketa'){
                        echo '
                            <li><a href="#1"></a></li>
                            <li><a href="#2"></a></li>
                            <li><a href="#3"></a></li>
                            <li><a href="#4"></a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="container side-collapse-container" style="margin-top: 70px">
    <div class="row">
        <?php
            include_once('view/login.php');
        ?>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php
    echo $view == 'login' ? '<script src="js/select.js"></script>' : '';
?>
</body>
</html>