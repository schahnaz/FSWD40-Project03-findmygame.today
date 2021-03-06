<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Aldrich|Hammersmith+One|News+Cycle:400,700|Pragati+Narrow:400,700" rel="stylesheet">
    <!--Style-->
    <link rel="stylesheet" href="style/css/main.css">
    <title>G4M3R5 | <?php echo $pageTitle; ?></title>
</head>

<body>
    <header>
        <a href="index.php" id="logo">
            <img src="img/logo.png" alt="logo">
        </a>
        <h1 class="pageTitle"><?php echo $pageTitle; ?></h1>
        <nav>     
            <?php if(empty($_SESSION['user_id'])){ ?>
                <form method="POST" action="inc/login.php">
                <input type="text" class="css-input" placeholder="Username" name="username">
                <input type="password" class="css-input" placeholder="Password" name="password">
                <input class="btn" type="submit" value="Login" name="btn-login">
                </form>
           <?php } ?>

            <?php if(!empty($_SESSION['user_id'])){ ?>
            <ul>
                <li> <a href="games.php"> <span class="nav-img"> <?php echo file_get_contents("img/icons/game.svg"); ?> </span>Games </a></li>
                <li> <a href="posts.php"> <span class="nav-img"> <?php echo file_get_contents("img/icons/posts.svg"); ?> </span>Posts </a></li>
                <li> <a href="events.php"> <span class="nav-img"> <?php echo file_get_contents("img/icons/group.svg"); ?> </span>Events </a></li>
                <li> <a href="about.php"> <span class="nav-img"> <?php echo file_get_contents("img/icons/user.svg"); ?> </span>About </a></li>
                <li> <a href="inc/logout.php"> <span class="nav-img"> <?php echo file_get_contents("img/icons/exit-door.svg"); ?> </span>Logout </a></li>
            </ul>
            <?php } ?>
        </nav>
    </header>

