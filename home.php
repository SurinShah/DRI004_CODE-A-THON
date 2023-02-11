<?php require('header.php'); 
?>
        <br><br>
     
<!-- STARTUP-->
        <div class="row row-content align-items-center" style="background-color:     #bb99ff;">
                   <div class=" col-12 col-md-7">
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
                                    <img src="" class="d-flex ml-3 img-thumbnail align-self-center">
                               <!--  </div> -->
                            
                        </div>

                        <div class="flip-card-back">
                            <!-- Back Code -->
                            <a href="user.php?reg=signup" class="btn btn-primary">Sign Up</a>
                            <a href="user.php?reg=login" class="btn btn-success">Log In</a>

                        </div>
                    </div>
                </div>
                <!-- ************************ -->
       
        </div><br><br>

<!-- INVESTOR DIVISION-->
        <div class="row row-content align-items-center"  style="background-color: #ff8080;">
            
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
                                    <img src="" class="d-flex mr-3 img-thumbnail align-self-center">
                               <!--  </div> -->
                            
                        </div>

                        <div class="flip-card-back" id="invflipback">
                            <!-- Back Code -->
                        <a href="company.php?reg=signup" class="btn btn-primary">Sign Up</a>
                        <a href="company.php?reg=login" class="btn btn-success">Log In</a>

                        </div>
                    </div>
                </div>

                <!-- ************************ -->
                
        </div><br><br>
</div>
        
           
<?php require('footer.php'); 
?>