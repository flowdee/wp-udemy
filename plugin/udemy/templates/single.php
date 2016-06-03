<?php
/*
 * Box template
 *
 * @package Udemy
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

// Check if course was forwarded
if ( ! isset ( $courses ) )
    return;
?>

<?php foreach ($courses as $course) { ?>

    <?php if ( is_string ( $course ) ) { echo $course; } else { ?>

        <div class="udemy-box">
            <?php if ( isset ( $course['title'] ) ) { ?>
                <h3><?php echo $course['title']; ?></h3>
            <?php } ?>

            <?php if ( isset ( $course['headline'] ) ) { ?>
                <p><?php echo $course['headline']; ?></p>
            <?php } ?>
        </div>

    <?php } ?>

<?php } ?>