<?php include "includes/global.php";
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Wilmington NC - Town Tripping</title>
    <?php include "includes/code-header.php"; ?>
</head>

<body class="page-listing-share<?php echo ('events' != $type && $town ? ' town-' . str_replace(' ', '-', strtolower($town)) : ''); ?>">
    <div class="root">
        <?php include "includes/header.php"; ?>

        <main class="content clearfix">
            <div class="caption-block relative">
                <span class="caption-icon share"></span>
                <h2 class="caption">Share</h2>
            </div>
            <div class="listing-loading"><span>Loading...</span></div>
        </main>

        <footer class="footer clearfix">
            <div class="footer-wrapper fixed">
                <div class="footer-bar">
                    <?php include "includes/menu-bottom.php"; ?>
                    <div class="bg-image">
                        <img src="images/dine-bg3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-wrapper"></div>
        </footer>
    </div>

	<?php include "includes/code-footer.php"; ?>
</body>

</html>