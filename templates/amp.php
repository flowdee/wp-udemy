<?php
/**
 * AMP template
 *
 * @package Udemy
 *
 * @var UFWP_Course $course
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Check if course was forwarded
if ( ! isset ( $courses ) )
    return;
?>

<div class="ufwp-amp">

    <?php foreach ( $courses as $course ) { ?>

        <?php if ( is_string ( $course ) ) { echo '<p>' . $course . '</p>'; } else { ?>

            <div class="<?php $course->the_classes( 'ufwp-course' ); ?>"<?php $course->the_container(); ?>>
                <a class="ufwp-course__link" href="<?php echo $course->get_url(); ?>" target="_blank" rel="nofollow" title="<?php echo $course->get_title(); ?>">
                    <?php $course->the_badges(); ?>
                    <span class="ufwp-course__img">
                        <img src="<?php echo esc_url( $course->get_image() ); ?>" alt="<?php echo esc_attr( $course->get_image_alt() ); ?>">
                    </span>

                    <span class="ufwp-course__content">
                        <span class="ufwp-course__title"><?php echo $course->get_title(); ?></span>
                        <span class="ufwp-course__instructors"><?php echo $course->get_instructors(); ?></span>
                        <span class="ufwp-course__headline"><?php echo $course->get_headline(); ?></span>

                        <span class="ufwp-course__footer">
                            <?php if ( $course->show_price() ) { ?>
                                <?php if ( $course->is_on_sale() ) { ?>
                                    <span class="ufwp-course__price ufwp-course__price--list"><?php echo $course->get_list_price(); ?></span>
                                <?php } ?>
                                <span class="ufwp-course__price"><?php echo $course->get_price(); ?></span>
                            <?php } ?>
                            <span class="ufwp-course__rating"><?php $course->the_star_rating(); ?> <?php echo $course->get_rating(); ?> (<?php printf( esc_html__( '%1$s ratings', 'wp-udemy' ), $course->get_reviews() ); ?>)</span>
                            <?php if ( $course->show_meta() ) { ?>
                                <span class="ufwp-course__meta"><?php printf( esc_html__( '%1$s lectures', 'wp-udemy' ), $course->get_lectures() ); ?>, <?php printf( esc_html__( '%1$s hours', 'wp-udemy' ), $course->get_playing_time() ); ?></span>
                            <?php } ?>
                        </span>
                    </span>
                </a>
            </div>

        <?php } ?>

    <?php } ?>

</div>
