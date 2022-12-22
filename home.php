<!DOCTYPE html>
<?php include "includes/global.php";
?>

<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Wilmington NC - Town Tripping</title>
    <?php include "includes/code-header.php"; ?>
</head>

<body class="page-home">
    <div class="root">
        <?php include "includes/header.php"; ?>

        <main class="content clearfix">
            <h3 class="head-top">Tap to begin exploring.</h3>
            <div class="home-menu">
                <ul class="menu menu-main">
                    <li><a href="listings.php?type=stay" data-url="listings.php?type=stay"><span
                                class="stay">Stay</span></a></li>
                    <li><a href="listings.php?type=play" data-url="listings.php?type=play"><span
                                class="play">Play</span></a></li>
                    <li><a href="listings.php?type=dine" data-url="listings.php?type=dine"><span
                                class="dine">Dine</span></a></li>
                    <li><a href="listings.php?type=shop" data-url="listings.php?type=shop"><span
                                class="shop">Shop</span></a></li>
                    <li><a href="listings.php?type=events" data-url="listings.php?type=events"><span
                                class="events">Events</span></a></li>
                    <li><a href="#"><span class="maps">Maps</span></a></li>
                </ul>
            </div>

            <div class="separator"></div>

            <h3 class="head-bottom">Or search by town.</h3>
            <div class="town-menu">
                <button class="menu-button">Choose a Town</button>

                <div class="popup absolute">
                    <button class="popup-close">Close</button>
                    <ul class="menu">
                        <li><span>Choose a Town</span></li>
                        <li><a href="#" class="wilmington">Wilmington</a></li>
                        <li><a href="#" class="carolina-beach">Carolina Beach</a></li>
                        <li><a href="#" class="kure-beach">Kure Beach</a></li>
                        <li><a href="#" class="wrightsville-beach">Wrightsville Beach</a></li>
                    </ul>
                </div>
            </div>
        </main>

        <footer class="footer clearfix">
            <div class="footer-wrapper fixed">
                <div class="footer-bar">
                    <div class="free-info">
                        <strong>Get Free Info</strong>
                        at Visitor Information Center
                    </div>
                </div>
            </div>
            <div class="footer-wrapper"></div>
        </footer>
    </div>

    <?php include "includes/code-footer.php"; ?>
</body>

</html>