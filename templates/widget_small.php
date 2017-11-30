<?php
/**
 * Widget small template
 *
 * @package Udemy
 *
 * @var UFWP_Course $course
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

// Check if course was forwarded
if ( ! isset ( $courses ) )
    return;
?>

<div class="ufwp-widget-small<?php if ( isset( $style ) ) echo ' ufwp-style-' . $style; ?>">

    <?php foreach ( $courses as $course ) { ?>

        <?php if ( is_string ( $course ) ) { echo '<p>' . $course . '</p>'; } else { ?>

            <div class="ufwp-course"<?php $course->the_container(); ?>>
                <a class="ufwp-course__link" href="<?php echo $course->get_url(); ?>" target="_blank" rel="nofollow" title="<?php echo $course->get_title(); ?>">
                    <span class="ufwp-course__img" style="background-image: url('<?php echo $course->get_image('widget_small'); ?>');"></span>

                    <span class="ufwp-course__content">
                        <span class="ufwp-course__title"><?php echo $course->get_title(); ?></span>

                        <span class="ufwp-course__footer">
                            <span class="ufwp-course__price"><?php echo $course->get_price(); ?></span>
                            <span class="ufwp-course__rating"><?php $course->the_star_rating(); ?></span>
                        </span>
                    </span>
                </a>
            </div>

        <?php } ?>

    <?php } ?>

</div>
