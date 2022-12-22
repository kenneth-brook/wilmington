<?php include "includes/global.php";
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Wilmington NC - Town Tripping</title>
    <?php include "includes/code-header.php"; ?>
</head>

<body class="page-listing-detail<?php echo ('events' != $type && $town ? ' town-' . str_replace(' ', '-', strtolower($town)) : ''); ?>">
    <div class="root">
        <?php include "includes/header.php"; ?>

        <main class="content clearfix">
            <div class="listing-loading"><span>Loading...</span></div>
        </main>

        <footer class="footer clearfix">
            <div class="footer-wrapper fixed">
                <div class="footer-bar">
                    <?php include "includes/menu-bottom.php"; ?>
                    <?php
                        $img = '';
                        if ( 'stay' == $type ) {
                            $img = 'images/stay-bg2.jpg';
                        } elseif ( 'play' == $type ) {
                            $img = 'images/play-bg2.jpg';
                        } elseif ( 'dine' == $type ) {
                            $img = 'images/dine-bg2.jpg';
                        } elseif ( 'shop' == $type ) {
                            $img = 'images/shop-bg2.jpg';
                        }
                    ?>
                    <?php if ( $img ) { ?>
                    <div class="bg-image">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                    <?php } else { ?>
                    <div class="free-info">
                        <strong>Get Free Info</strong>
                        at Visitor Information Center
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="footer-wrapper"></div>
        </footer>
    </div>

	<?php include "includes/code-footer.php"; ?>
</body>

</html>