<?php
/*
Template Name: Шаблон главной страницы
*/
get_header();
?>

	<section id="primary" class="content-area homepage">
		<main id="main" class="site-main">

                <section class="section-slider">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </section>
                <section class="section-news">
                    <div class="container">
                        <h2 class="h2"><a href="<?php echo get_page_link( 383 ); ?>">Новости</a></h2>


                            <?php query_posts('cat=5&showposts=3'); ?>
                            <div class="row">
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="news-item">
                                                <div class="news-item__img"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                    <a href="<?php the_permalink() ?>" >
                                                        <div class="overlay"></div>
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="news-item__body"><!--<?php trim_title_chars(42, '...'); ?>-->
                                                    <a href="<?php the_permalink() ?>" class="news-item__title"><?php the_title(); ?></a>
                                                    <div class="news-item__date"><?php twentynineteen_posted_on(); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <div class="col-sm-6 col-xl-3">
                                    <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
                                </div>
                            </div>
                    </div>
                </section>
                <!--<section class="form">
                    <div class="container">
                        <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
                    </div>
                </section>-->
                <section class="section-events grid">
                    <div class="container">
                        <h2 class="h2">
                            <a href="<?php echo get_page_link( 395 ); ?>">События</a>
                        </h2>
                        <?php query_posts('cat=6&showposts=6'); ?>
                        <div class="row">
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-sm-6 col-xl-4">
                                    <a class="event-item" href="<?php the_permalink() ?>">
                                        <figure class="effect-oscar">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="img09"/>
                                            <figcaption class="event-item__body">
                                                <div class="event-item__title"><?php the_title(); ?></div>
                                                <div class="event-item__text"><?php the_excerpt(); ?></div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            <?php endwhile;?>


                        </div>
                    </div>
                </section>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
