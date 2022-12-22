<header class="header clearfix">
    <div class="header-wrapper fixed">
        <div class="header-bar">
            <div class="header-top">
                <div class="logo"><a href="home.php">Wilmington NC</a></div>

                <button class="navigation-button"><span>menu</span></button>
                <a href="itinerary.php" class="itinerary-button"><span>view itinerary</span></a>

                <div class="popup header-menu">
                    <button class="popup-close">Close</button>
                    <ul class="menu">
                        <li><a href="listings.php?type=stay<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>" data-url="listings.php?type=stay">Stay</a></li>
                        <li><a href="listings.php?type=play<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>" data-url="listings.php?type=play">Play</a></li>
                        <li><a href="listings.php?type=dine<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>" data-url="listings.php?type=dine">Dine</a></li>
                        <li><a href="listings.php?type=shop<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>" data-url="listings.php?type=shop">Shop</a></li>
                        <li><a href="listings.php?type=events<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>" data-url="listings.php?type=events">Events</a></li>
                        <li><a href="#">Maps</a></li>
                        <li><a href="#">Follow Us</a></li>
                        <li><a href="#">Visitors Guide</a></li>
                        <li><a href="#">Website</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-bottom">
                <div class="search-form">
                    <input type="search" size="20" placeholder="Keyword Search">
                    <button><span>Search</span></button>
                </div>
                <div class="sort-options">
                    <button class="sort-button">sort options</button>

                    <div class="popup">
                        <button class="popup-close">Close</button>
                        <ul class="menu">
                            <li><a href="#" class="all">Show All</a></li>
                            <li><a href="#" class="near">Near Me</a></li>
                            <li><a href="#" class="community">Community</a></li>
                            <li><a href="#" class="alphabetical">Alphabetical</a></li>
                            <li><a href="#" class="price">Price</a></li>
                            <?php if ('events' != $type) { ?>
                                <li><a href="#" class="cuisine">Cuisine</a></li>
                            <?php } else { ?>
                                <li><a href="#" class="date">Date</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrapper"></div>
</header>