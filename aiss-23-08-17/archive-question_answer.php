<?php get_header(); ?>

         <section class="question">
             <div class="container">
                 <div class="row">
	                 <?php if( have_posts()):
	                 while ( have_posts()): the_post();?>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><!-- question part start here -->
                         <div class="question-answer-part">
                             <div class="question-part">
                                 <div class="question-part-inner">
                                     <div class="question-part-inner-markimg"></div>
                                     <div class="queston-part-content">
                                         <h4>
	                                         <?php the_title(); ?>
                                         </h4>
                                     </div>
                                     <div class="question-part-view">
                                         <a class="view">
                                             <span></span> View the answer →
                                         </a>
                                         <a class="social facebook"></a>
                                         <a class="social twitter"></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="answer-part">
                                 <div class="answer-part-inner">
                                     <div class="answer-part-imgicon"></div>
                                     <div class="answer-part-content">
                                         <?php the_content(); ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div><!-- question part end here -->
	                 <?php endwhile;
	                 endif;?>

                 </div>
             </div>
         </section>

<?php get_footer();?>

