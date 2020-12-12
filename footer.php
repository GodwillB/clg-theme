<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clg
 */

?>

<footer class="">
        <div class="black-background">
            <div class="container">
                <div class="row py-5">
                   <div class="col-md-3">
                      <h4 class="text-white helvetica-bold">Quick Contact</h4>
                      <div class="col-md-3 border-special"></div>
                      <form class="py-4">
                          <div class="form-group">
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                          </div>
                          <button type="submit" class="btn mt-3 secondary-color-background text-white">Send</button>
                      </form>
                   </div>
                   <div class="col-md-3">
                       <h4 class="text-white helvetica-bold">Links</h4>
                        <div class="col-md-3 border-special"></div>
                       <ul class="py-4">
                           <li class="">
                               <a href="" class="secondary-color">Home</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('index.php/about'); ?>" class="text-white">About</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('index.php/our-team'); ?>" class="secondary-color">Our team</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('index.php/careers'); ?>" class="text-white">Careers</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('index.php/contact-us'); ?>" class="secondary-color">CSR</a>
                           </li>
                            <li>
                               <a href="<?php echo home_url('index.php/contact-us'); ?>" class="text-white">Contact Us</a>
                           </li>
                       </ul> 
                   </div>
                    <div class="col-md-3">
                       <h4 class="text-white helvetica-bold">Practice Areas</h4>
                        <div class="col-md-3 border-special"></div>
                       <ul class="py-4">
                           <li>
                               <a href="<?php echo home_url('/index.php/practice-areas-pt/cooperate-finance/'); ?>" class="secondary-color">Cooperate Finance</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('/index.php/practice-areas-pt/capital-markets'); ?>" class="text-white">Capital Markets</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('/index.php/practice-areas-pt/banking'); ?>"class="secondary-color">Banking</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('/index.php/practice-areas-pt/banking'); ?>" class="text-white">Registration and Compliance</a>
                           </li>
                           <li>
                               <a href="<?php echo home_url('/practice-areas-pt/capital-markets'); ?>" class="secondary-color">Real Estate</a>
                           </li>
                            <li>
                               <a href="<?php echo home_url('/practice-areas-pt/capital-markets'); ?>" class="text-white">Dispute Resolution</a>
                           </li>
                       </ul> 
                   </div>
                   <div class="col-md-3">
                       <h4 class="text-white helvetica-bold">Get in touch</h4>
                        <div class="col-md-3 border-special"></div>
                       <ul class="py-4">

                           <li class="secondary-color">
                               <p>No. 5 Swiss Cottages</p>
                               <p>(Opp. Prime Bank),  Riverside Drive</p>
                           </li>
                           <li class="text-white">
                               <p>P. O. Box 10997-00100</p>
                           </li>
                           <li class="secondary-color">
                               <p>Nairobi Kenya</p>
                           </li>
                           <li class="text-white" >
                              <p>info@clg700.com</p>
                           </li>
                           <li class="secondary-color">
                              <p>Tel: +254 733 222299 (Landline: +254 020 5201656)</p>
                           </li>
                       </ul> 
                   </div>
                </div>
                <div class="row justify-content-center pt-3 socials">
                    <div class="col-md-3 text-center">
                       <i class="fab fa-facebook-f"></i>
                       <i class="fab fa-twitter"></i>
                       <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="row justify-content-center pb-5">
                    <div class="col-md-2 text-center social-border">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="white-background container">
           <div class="row py-3">
               <div class="col-md-6">
                   <p class="text-center">Capital Law Group © 2020, All Rights Reserved.</p>
               </div>
               <div class="col-md-6">
                   <p class="text-center">Built by Legibra</p>
               </div>
           </div> 
        </div>
    </footer>
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
