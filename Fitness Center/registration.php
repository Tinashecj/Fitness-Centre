<!DOCTYPE html>
<html lang="en">
    <head>
        <title> DFC </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Didact+Gothic&display=swap&family=Acme&display=swap&family=Francois+One&display=swap" rel="stylesheet">
        
    </head>

    <body>
    
        <div class="Regbody">
                    <h1 id="message"> Student Registration Form </h1> 
                        <form action="registration_validate.php" method="POST">
                                <div class="form-group row pt-lg-5 pb-lg-5 pt-5">

                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-5 ">
                                            
                                                <label for="student_number">Gym ID No:</label>
                                                <input type="numeric" name="ID_number" value ='<?php echo $ID_number; ?>' class="form-control mb-4" maxlength="25"  required/>

                                                <label for="first_name">First Name:</label>
                                                <input type="text" name="first_name" value ='<?php echo $first_name; ?>' class="form-control mb-4" maxlength="25" required/>
                                                
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" name="last_name" value='<?php echo $last_name; ?>' class="form-control mb-4" maxlength=25 required/>

                                                <label for="mobile_no">Mobile No:</label>
                                                <input type="tel" name="mobile_no" class="form-control mb-4" value ='<?php echo $mobile_no; ?>' placeholder="eg. +353860040400" required/>

                                                <label for="home_no">Home No:</label>
                                                <input type="tel" name="home_no" value='<?php echo $home_no; ?>' class="form-control mb-4" placeholder="eg. +353860040400"/>

                                                <label for="gender">Gender:</label>
                                                <div class="mb-4">
													<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?>
													value="Female" > Female <br>
													
													<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?>
													value="Male"> Male <br>
													
                                                </div>

                                                <label for="date_of_birth">Date Of Birth:</label>
                                                <input type="date" name="date_of_birth" class="form-control mb-4" value='<?php echo $date_of_birth ; ?>' required/>

                                                <label for="address1">Address:</label>
                                                <input type="text" name="address" value ='<?php echo $address1; ?>' placeholder=" Line 1, Apt, street" class="form-control mb-4" required/> 

                                                <label for="address2">Line 2:</label>
                                                <input type="text" name="address2" value='<?php echo $address2; ?>' placeholder="City, Country" class="form-control mb-4">
                                            
                                                
                                                <label for="email">Email:</label>
                                                <input type="email" value='<?php echo $email; ?>' name="email" required/>
        
                                                <label for="eircode">EirCode:</label>
                                                <input type="text" name="eircode" value='<?php echo $eircode; ?>' placeholder="D02F2F9" maxlength=8 />
                                                
                                                <label for="membership"> Membership:</label>
                                                <select name="membership" class="form-control mb-4" required>
                                                    <option value="" selected = "selected">Membership Option: </option>
													<option value="basic" <?php if (isset($membership) && $membership=="basic") echo "selected";?>> Basic </option>
   													<option value="premium" <?php if (isset($membership) && $membership=="premium") echo "selected";?>> Premium </option>
   													<option value="student" <?php if (isset($membership) && $membership=="student") echo "selected";?>> Student </option>
                                                </select>

                                            </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 offset-4">
                                    <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block text-uppercase bg-primary">
                                </div>    
                        </form>
           
        </div> 

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <script src="javascr.js"></script>
    </body>

</html>