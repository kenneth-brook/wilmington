<?php include "includes/global.php";
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Wilmington NC - Town Tripping</title>
    <?php include "includes/code-header.php"; ?>
</head>

<body class="page-itinerary">
    <div class="root">
        <?php include "includes/header.php"; ?>

        <main class="content clearfix">
            <div class="caption-block">
                <span class="caption-icon itinerary"></span>
                <h2 class="caption">Itinerary</h2>

                <a href="#" class="share-itinerary"><span>Share Itinerary</span></a>
            </div>
            <ul class="itinerary-list">
                <li class="itinerary-loading">Loading...</li>
            </ul>
        </main>

        <footer class="footer clearfix">
            <div class="footer-wrapper fixed">
                <div class="footer-bar">
                    <?php include "includes/menu-bottom.php"; ?>
                    <div class="bg-image">
                        <img src="images/itinerary-bg.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-wrapper"></div>
        </footer>
    </div>

	<?php include "includes/code-footer.php"; ?>
</body>

</html>