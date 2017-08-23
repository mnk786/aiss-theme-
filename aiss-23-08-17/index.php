<?php get_header();?>

  <?php get_template_part('template-parts/header/slider', 'slider');?>


    <section class="box ">
        <div class="container">
	        <?php echo aiss_get_categories(); ?>
	        <?php echo aiss_home_about(); ?>
        </div>
    </section>
   <?php echo aiss_home_fitness(); ?>
   <?php echo aiss_home_swimming(); ?>
   <?php echo aiss_home_summer(); ?>
   <?php echo aiss_home_company(); ?>
<?php get_footer(); ?>