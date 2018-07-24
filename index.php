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
    <link href="https://fonts.googleapis.com/css?family=Aldrich|Hammersmith+One|News+Cycle:400,700|Pragati+Narrow:400,700" rel="stylesheet">
    <!--Style-->
    <link rel="stylesheet" href="style/css/main.css">
    <title>G4M3R5</title>
</head>

<body>

    <header>
        <div id="logo">
            <img src="img/logo.png" alt="logo">
        </div>

        <nav>
            <ul>
                <li> <a href=""> <span class="nav-img"> <?php echo file_get_contents("img/icons/game.svg"); ?> </span>Games </a></li>
                <li> <a href=""> <span class="nav-img"> <?php echo file_get_contents("img/icons/posts.svg"); ?> </span>Posts </a></li>
                <li> <a href=""> <span class="nav-img"> <?php echo file_get_contents("img/icons/group.svg"); ?> </span>Groups </a></li>
                <li> <a href=""> <span class="nav-img"> <?php echo file_get_contents("img/icons/user.svg"); ?> </span> </a></li>
            </ul>
        </nav>
    </header>
    <!--Slider-->

        <div id="slider">
            <div class="loading"></div>
            <div class="arrow arrow-left">
                <i class="fa fa-angle-left fa-2x"></i>
            </div>
            <ul class="slides">
                <li class="slide slide1">
                    <div>
                        <h3>Sign up</h3>
                        <span>we promise its free ;)</span>
                    </div>
                </li>
                <li class="slide slide2">
                    <div>
                        <h3>Discover</h3>
                        <span>thousands of players and games!</span>
                    </div>
                </li>
                <li class="slide slide3">
                    <div>
                        <h3>Join</h3>
                        <span>groups and lead your team to victory!</span>
                    </div>
                </li>
                <li class="slide slide4">
                    <div>
                        <h3>Create</h3>
                        <span>your own team for any game!</span>
                    </div>
                </li>
            </ul>
            <div class="arrow arrow-right">
                <i class="fa fa-angle-right fa-2x"></i>
            </div>
        </div>

    
    <!--Content-->
    <main>
        <div class="content">
            Content
        </div>
        <aside>
            Sidebar
        </aside>
    </main>
    
    <!--Footer-->
    <footer>
        Footer
    </footer>

    <!--Scritps-->
    <script src="js/sliders.js"></script>
    <script src="js/main.js"></script>
</body>

</html>