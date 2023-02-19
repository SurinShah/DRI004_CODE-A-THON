<?php require('header.php'); 
?>
        <br><br>
     
<!-- STARTUP-->
        <div class="row row-content align-items-center" style="background-color: #556EE6; border-radius: 15px 50px 30px">
                   <div class=" col-12 col-md-7" style="border-radius: 15px 50px 30px">
                                <h2 class="mt-0">User Registration</h2>
                                <p>
                                <em>Affordable Policy options available!</em>
                            
                                </p>
                    </div>

                <!-- Flipcard STARTS -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <!-- Front Code -->
                                <!-- <div class="col-12 col-md-5"> -->
                                    <img src="image/user2.jpg" class="d-flex ml-3 img-thumbnail align-self-center" style=  "border-radius: 15px 50px 30px">
                               <!--  </div> -->
                            
                        </div>

                        <div class="flip-card-back">
                            <!-- Back Code -->
                            <a href="user.php?reg=signup" class="btn btn-primary" style ="border-radius: 25px">Sign Up</a>
                            <a href="user.php?reg=login" class="btn btn-success" style ="border-radius: 25px">Log In</a>

                        </div>
                    </div>
                </div>
                <!-- ************************ -->
       
        </div><br><br>

<!-- INVESTOR DIVISION-->
        <div class="row row-content align-items-center"  style="background-color: #556EE6; border-radius: 15px 50px 30px">
            
                <div class="col-12 col-md-7 order-md-last">
                    <h2 class="mt-0">Company Registration</h2>
                    <p>
                        <em>Find your potential customers here!</em>
                        
                    </p>
                </div>  
                <!-- Flipcard STARTS -->

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <!-- Front Code -->
                                <!-- <div class="col-12 col-md-5"> -->
                                    <img src="image/user.jpg" class="d-flex mr-3 img-thumbnail align-self-center" style=  "border-radius: 15px 50px 30px">
                               <!--  </div> -->
                            
                        </div>

                        <div class="flip-card-back" id="invflipback" style ="border-radius: 25px">
                            <!-- Back Code -->
                        <a href="company.php?reg=signup" class="btn btn-primary" >Sign Up</a>
                        <a href="company.php?reg=login" class="btn btn-success" style ="border-radius: 25px">Log In</a>

                        </div>
                    </div>
                </div>

                <!-- ************************ -->
                
        </div><br><br>

        <div class="row row-content align-items-center" style="background-color: #556EE6;border-radius: 15px 50px 30px">
                   <div class=" col-12 col-md-7">
                    <h2 class="mt-0">Tutorial</h2>
                   
                </div>  
                <video width="400" controls>
                <source src="tutorial.mp4" type="video/mp4">
                <source src="tutorial.ogg" type="video/ogg">
                Your browser does not support video.
                </video>
                </div>

                <!-- ************************ -->
                
        </div><br><br>
</div>
        
           
<?php require('footer.php'); 
?>
