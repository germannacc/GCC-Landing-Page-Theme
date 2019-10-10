<?php 
get_header(); ?>

     <div class="spring-box" id="content">
    
        <div class="container spring-hero">
          <div class="row">
              <div class="col-md-5">
              
                
                
            </div>
            <div class="col-md-7">
                
                <div class="header"><h1><?php the_field( 'row_1_heading' );  ?></h1></div>
                
                <div class="spring-form">
                    
                    <h2><?php the_field( 'row_1_lead' ); ?></h2>
                    
                    <h3><?php the_field( 'row_1_subheading' ); ?></h3>

                    <?php the_field( 'row_1_form' ); ?>
                    
             <!--        <form>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="fname" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="Enter first name">
                    <small id="emailHelp" class="form-text text-muted">Let's get on a first-name-basis.</small> //-->
                     <!--  </div>
                        
                        <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="lname" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Enter last name">
                       <small id="emailHelp" class="form-text text-muted">And your last name too.</small>//-->
                     <!--  </div> -- -->
                    
                     <!--  <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email, promise.</small> //-->
                     <!--  </div>
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">Tell me more about:</label>
                        <select class="form-control" id="interest" aria-describedby="interestHelp" placeholder="Select an interest">
                            <option>--Select an interest--</option>
                            <option>College Transfer</option>
                            <option>Career Training</option>
                            <option>Taking a Class</option>
                        </select> -->
                        <!-- <small id="interestHelp" class="form-text text-muted">Let us kow what you're interested in.</small> // -->
<!--                       </div> 
 -->                 <!--      
                      <div class="form-check">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form> --> 
                    
                </div>
              
            </div>
            
          </div>
        </div>
            
        </div>
        
        <div class="spring-skill">
    
        <div class="container spring-hero">
          <div class="row">
              
           
              
              <div class="col-md-5">
              
                
                
            </div>
              
               <div class="col-md-7">
                
                <div class="header"><h1><?php the_field( 'row_3_heading' ); ?></h1></div>
                
                <div class="spring-form">
                    
                    <h3><?php the_field( 'row_3_subheading' );  ?></h3>
                    
                    <h2><?php the_field( 'row_3_lead' ); ?></h2>
                    
                    <p><?php the_field('row_3_text') ?></p>
                    
                    
                </div>
              
            </div>
            
          </div>
        </div>
            
        </div>

          <div class="spring-save">
    
        <div class="container spring-hero">
          <div class="row">
              
            <div class="col-md-7">
                
                <div class="header"><h1><?php the_field( 'row_2_heading' ); ?></h1></div>
                
                <div class="spring-form">
                    
                    <h3><?php the_field( 'row_2_subheading' ); ?></h3>
                    
                    <h2><?php the_field( 'row_2_lead' ); ?></h2>
                    
                    <p><?php the_field('row_2_text') ?></p>
                              
                </div>
              
            </div>
              
              <div class="col-md-5">
              
                
                
            </div>
            
          </div>
        </div>
            
        </div>
        
        <div class="spring-learn">
    
        <div class="container spring-hero">
          <div class="row">
              
           
              <div class="col-md-7">
                
                <div class="header"><h1><?php the_field( 'row_4_heading' ); ?></h1></div>
                
                <div class="spring-form">
                    
                    <h3><?php the_field( 'row_4_subheading' ); ?></h3>
                    
                    <h2><?php the_field( 'row_4_lead' ); ?></h2>
                    
                    <p><?php the_field( 'row_4_text' ); ?></p>
                    
                    
                </div>
              
            </div>
              <div class="col-md-5">
              
                
                
            </div>
              
               
            
          </div>
        </div>
            
        </div>
        
        <div class="spring-bottom">
    
        <div class="container spring-hero">
          <div class="row">
              
           
              <div class="col-sm-12 col-md-7">
                
                  <div class="header"><h1><?php the_field( 'row_5_left_column_heading' ); ?></h1></div>
                
                <div class="spring-form">
                    <h2><?php the_field( 'row_5_left_column_lead' ); ?></h2>
<div class="row">  
    <div class="col-sm-12 col-md-12 col-lg-6">

        <p><?php the_field( 'row_5_left_column_text' ); ?></p>
    </div>
    
    <div class="col-sm-12 col-md-12 col-lg-6">

 <p><?php the_field( 'row_5_left_column_subheading' ); ?></p>

<?php the_field( 'row_5_left_column_class_start_dates' ); ?>


    </div>
                    </div>
                  
                </div>
              
            </div>
              <div class="col-sm-12 col-md-5">
              
                
                    <h2><?php the_field( 'row_5_right_column_heading' ); ?></h2>
                    
                 <?php the_field( 'row_5_right_column_form' ); ?>
            </div>
              
          </div>
        </div>
            
        </div>
        
<?php get_footer(); ?>