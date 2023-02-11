<?php
session_start();
require_once 'sendEmails.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "venture";

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Database Connected!!!";


$error = "";
$msg = "";
if(array_key_exists("submit", $_POST)){

    
    if($error != ""){
        $error = "<p>There were error(s) in your form! </p>".$error;
    }
    else{
        
        $name = $_POST['name'];
        $phone = mysqli_real_escape_string($link, $_POST['phone']);
        $prange=$_POST['prange'];
        $disease = $_POST['disease'];
        $id=$_SESSION['sid'];
        //echo "$briefidea";
    

    $query = "INSERT INTO postidea (startupid,name,phone,prange,disease) VALUES ('$id','$name','$phone','$prange','$disease')";

          
            if(mysqli_query($link, $query)){
                    //echo "Idea Posted successfully.";
                $msg = "Idea Posted successfully.";
                    //header("Location: startuphome.php");
                    echo '<div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> Idea posted for funds successfully!
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>';
                } 
            else{
                echo "ERROR: Could not able to execute <br>$query. <br>" . mysqli_error($link);
            }
    }
}


?>


<?php require('header2.php'); 
?>

<?php
    if(isset($_SESSION['s_is_auth'])){
        if($_SESSION['s_is_auth']){
            if($_SESSION['verified']){?>
    
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong> You are logged In!
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <h3 class="text-primary f-w-100">User Profile</h3>
        <div class="postidea">
            
            <!-- newideabtn  -->
            
            <a class="btn btn-info" href="startuphome.php?post=new" >Post Insurance Price range</a>
            <a class="btn btn-info" href="read.php" >View Details</a>
         


    <?php

    if(isset($_GET['post'])){

        if($_GET['post']=="new"){?>
            <div id="">
                <form method="POST" id="ideaform">


                <div class="form-group">

                    <label for="firstname" class="col-form-label col-12 col-md-1 ">Name</label>
                        <div class="col-12 col-md-5 ">
                            <input type="text" class="form-control" id="firstname" name="name" placeholder="Name" required>
                        </div>

                    <label for="firstname" class="col-form-label col-12 col-md-1 ">Number</label>
                            <div class="col-12 col-md-5 ">
                                <input type="number" class="form-control" id="firstname" name="phone" placeholder="Enter your Phone Number" required>
                            </div>

                    <label for="ideatextbox" class="col-form-label col-12"> Enter Your price range</label>

                    <div class="col-12 col-md-5 ">
                                <input type="number" class="form-control" id="firstname" name="prange" placeholder="Enter your Price Range" required>
                            </div>
                    <label for="ideatextbox" class="col-form-label col-12">Do you have any diseases?</label>
                    <div class="col-12 col-md-5 ">
                                <input type="text" class="form-control" id="firstname" name="disease" placeholder="Enter diseases if any" required>
                            </div>
                </div>

                <!-- Post Idea Button -->
                <input type="submit" class="btn btn-info" id="postideabtn" name="submit" value="Post Idea">
              
            </form>

            </div>
            <?php } else { ?>
                

            


            <?php }} ?>



<!-- To Display Error(s) in HTML ,if generated -->


 
        
 

</div>




         <div class="investorlist">

            <h2 class="text-primary f-w-100">List of Companies</h2>
            <p>
        
            </p>
            <?php
            if(1){
            // Attempt select query execution
                    $sql = "SELECT * FROM investor WHERE 1";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            
                            while($row = mysqli_fetch_array($result)){
                                echo "<div class='col-md-12'>";
                                echo "<div class='card'>";
                                echo "<h3 class='card-header text-white' style='background-color: #0059b3;'>". $row['cname']."</h3>";
                                echo "<div class='card-body'style='background-color: #e6f2ff;'>";
                                    echo "<div class='card-body'>";
                                    echo "<dl class='row'>";
                                    echo "<dt class='col-6'>Investor<dt>";
                                    echo "<dd class='col-6'>" . $row['cname'] . "</dd>";
                                    echo "<dt class='col-6'>Email<dt>";
                                    echo "<dd class='col-6'>" . $row['mail'] . "</dd>";
                                    echo "<dt class='col-6'>Phone<dt>";
                                    echo "<dd class='col-6'>" . $row['phone'] . "</dd>";
                                    echo "<dt class='col-6'>Location<dt>";
                                    echo "<dd class='col-6'>" . $row['location'] . "</dd>";
                                    echo "<dt class='col-6'>Contact<dt>";
                                    echo "<dd class='col-6'>" . '<a class="btn btn-danger" href="mailto:"'.$row['mail'].'>Mail</a>' . "</dd>";
                                    echo "</dl>";                            
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='col-12'><br></div>";
                            }
                        // Free result set
                        mysqli_free_result($result);
                    }
                        
                        
                        else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }


                }
            ?>
        </div> 

<!-- END of container class -->
    
<?php }
            else
            {
                echo '<div class="alert alert-warning alert-dismissible fade show">
                <strong>Alert!</strong> You have not verified your email ID, please verify it by using link send to your mail!
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>';
            }
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show">
                <strong>Alert!</strong> Please Login as User To Continue!!!
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>';
                echo '<a href="startup.php?reg=login" class="btn btn-warning">Log In</a><br><br>';
            }}
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show">
                <strong>Alert!</strong> Please Login as User To Continue!!!
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>';
                echo '<a href="startup.php?reg=login" class="btn btn-warning">Log In</a><br><br>';
            }
            ?>
            
    <div class="row">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>  
    </div>

       
    <?php require('footer.php'); 
?>