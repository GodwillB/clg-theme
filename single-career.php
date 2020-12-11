<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Meds
 */

get_header();
?>
    <section class="page-head">
        <img class="img-fluid w-100" src="<?php echo wp_get_attachment_url(138); ?>">
        <div class="overlay"></div>
        <div class="page-title">
            <h2 class="header-text"><?php the_title(); ?><h2>
        </div>
    </section>
    
    <div class="row container mx-auto application">
        <div class="col-md-12">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <a class="btn" href="<?php the_field('application_form'); ?>" download><i class="fa fa-download pr-3"></i> Download Application Form</a>
                    <p class="pt-3 mb-0 dates">Date Posted: <?php echo get_the_date(); ?></p>
                    <p class="dates">Application Deadline: <?php the_field('application_deadline');?><p>
                    <div class="text-justify">
                        <p><?php the_content(); ?></p>
                        <p><?php the_field('job_requirements');?></p>
                        
                    </div>
                    <div class="application-form p-4 pb-5">
                        <h3 class="mb-4">Application Form</h3>
                        <?php echo do_shortcode('[contact-form-7 id="195" title="Job Application"]');?>
                    </div>  

                <?php
                    endwhile; // End of the loop.
                ?>
        </div>
    </div>
    

<script>
    document.getElementById('job_title').value='<?php the_title(); ?>' ; 
</script>
<?php
get_footer();