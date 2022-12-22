<div class="menu-wrapper">
    <ul class="menu menu-main">
        <li><a href="listings.php?type=stay<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>"<?php echo ('listing-map.php' != $filename && 'stay' == $type ? ' class="current"' : ''); ?>><span class="stay">Stay</span></a></li>
        <li><a href="listings.php?type=play<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>"<?php echo ('listing-map.php' != $filename && 'play' == $type ? ' class="current"' : ''); ?>><span class="play">Play</span></a></li>
        <li><a href="listings.php?type=dine<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>"<?php echo ('listing-map.php' != $filename && 'dine' == $type ? ' class="current"' : ''); ?>><span class="dine">Dine</span></a></li>
        <li><a href="listings.php?type=shop<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>"<?php echo ('listing-map.php' != $filename && 'shop' == $type ? ' class="current"' : ''); ?>><span class="shop">Shop</span></a></li>
        <li><a href="listings.php?type=events<?php echo ($town ? '&town=' . urlencode($town) : ''); ?>"<?php echo ('listing-map.php' != $filename && 'events' == $type ? ' class="current"' : ''); ?>><span class="events">Events</span></a></li>
        <li><a href="#"<?php echo ('listing-map.php' == $filename ? ' class="current"' : ''); ?>><span class="maps">Maps</span></a></li>
    </ul>
</div>