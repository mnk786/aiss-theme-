<?php
/*
* Template part for displaying menu at header
*
* @package Anza
*
*/
    global $redux_demo;
    if($redux_demo['anza-copyright-text']!=1)
        return;
?>
<div class="footer-text">
    <h6><?php echo $redux_demo['copyright-text']?></h6>
</div>