<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/css/dashboard.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Aldrich|Hammersmith+One|News+Cycle:400,700|Pragati+Narrow:400,700" rel="stylesheet"> 
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>$Admin Dashboard</title>
</head>
<body>
    <header>
        <div class="user-logged">
            <img class="avatar-small" src="../img/avatars/default_avatar.jpg" alt="avatar"> 
            <h1 class="username"><?php echo $_SESSION['user_id']; ?></h1>
        </div>
        <h1><?php echo $pageTitle ?></h1>
    </header>
    <main>
        <aside>
                <?php if($_SESSION['role']=='admin'){ ?>
                <!-- ADMIN NAV -->
                <ul class="dash-nav">
                    <li><a class="backlink" href="../index.php">Back to Page</a></li>
                    <li><a href="index.php">Overview</a></li>
                    <li><a href="create_event.php">Create Event</a></li>
                    <li><a href="profile.php">Userlist</a></li>
                    <li><a href="posts.php">Userposts</a></li>
                </ul>
                <?php }; ?>

                <?php if($_SESSION['role']=='user'){ ?>
                <!-- USER NAV -->
                <ul class="dash-nav">
                    <li><a class="backlink" href="../index.php">Back to Page</a></li>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="#">My Posts</a>
                        <ul class="dash-sub-nav">
                            <li><a href="posts.php">My Posts</a></li>
                            <li><a href="create_post.php">Create Post</a></li>
                        </ul>
                    </li>
                </ul>
                <?php }; ?>
        </aside>