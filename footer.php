<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gcc-starterkit
*/
?>
<div class="spring-footer">
                  
                <div class="container-fluid"> 
                   <div class="row">
                       
                      <div class="col-sm-12 col-md-8">
                   
                   <a href="https://www.germanna.edu/" target="_blank"><img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/germanna-logo-white.svg" class="custom-logo mb-3 mb-md-0 mx-auto" alt="germanna logo" width="264" height="79"></a>
                    
                      
                      </div>
                      
            <div class="col-sm-12 col-md-4">

                  <?php if ( have_rows( 'footer_links', 'options' ) ) : ?>

                    <ul class="list-inline text-sm-center text-md-right">
                      <?php while ( have_rows( 'footer_links', 'options' ) ) : the_row(); ?>
                        <li class="list-inline-item"><a href="<?php the_sub_field( 'link_url', 'options' );?>">
                          <?php the_sub_field( 'link_text', 'options' ); ?>  
                          </a>
                        </li>
                      <?php endwhile; ?>
                    </ul>

                  <?php endif; ?>

               <p class="text-sm-center text-md-right">&copy; <?php echo date('Y'); ?> 
                <?php _e('Germanna Community College', 'gcc-starter-kit') ?>
               </p>
              
            </div>
                   </div>
          
          </div>         
              </div>
<?php wp_footer(); ?>
</body>
</html>