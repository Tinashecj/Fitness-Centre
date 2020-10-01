<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();
    
    $ID_number= trim($_POST['ID_number']);
    if (!preg_match("/^[0-9]*$/",$ID_number)) {
        $errors[] = "Invalid ID! use only numbers and white space.";
    }

    $first_name = trim($_POST['first_name']);
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $errors[] = "Invalid first name! use only letters and white space.";
    }

    $last_name = trim($_POST['last_name']);
     if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $errors[] = "Invalid last name! use only letters and white space.";
    }

    $address1 = trim($_POST['address']);
    if(empty($_POST['address'])) {
        $errors[] = 'address is required.';
    }
    else{
        if (!preg_match("/^[a-zA-Z0-9.,#&]*$/",$address)) {
            $errors[] = "Invalid letter in the address line 1! use only letters, alphabets, (.,#&) and white space.";
        }
    }


    $address2 = trim($_POST['address2']);
    if (!preg_match("/^[a-zA-Z0-9.,#&]*$/",$address2)) {
        $errors[] = "Invalid letter in the address line 2! use only letters, alphabets, (.,#&) and white space.";
    }
   

    $mobile_no= trim($_POST['mobile_no']);
	if ($mobile_no[0] != '+' and $mobile_no[1] != 3 and $mobile_no[2] != 5 and $mobile_no[3] != 3) {
		$errors[] = "Invalid moblile number! number starts with +353";
    }
		
	else {
		if (!preg_match("/^[0-9+]*$/",$mobile_no)) {
			$errors[] = "Invalid moblile number! numbers and + are allowed only";
		}
				
		else if ($mobile_no[4] != 8) {
			$errors[] = "Invalid moblile number! number starts with +353 8";
		}
				
		else if ($mobile_no[5] != 5 and $mobile_no[5] != 6 and $mobile_no[5] != 7 and $mobile_no[5] != 8 and $mobile_no[5] != 9) {
			$errors[] = "Invalid moblile number! number starts with +353 85, 86, 87, 88, 89";
		}
				
		else if(strlen($mobile_no) != 13 ){
			$errors[] = "Invalid moblile number! very few or too much numbers. 13 numbers required";
		}
	}
		  
		  
		  
		  
		  
	$home_no= trim($_POST['home_no']);
	if ($home_no[0] != '+' and $home_no[1] != 3 and $home_no[2] != 5 and $home_no[3] != 3) {
		$errors[] = "Invalid home_no! number starts with +353";
	}
		
	else {
		if (!preg_match("/^[0-9+]*$/",$home_no)) {
			$errors[] = "Invalid home_no! numbers and + are allowed only";
		}
				
		else if ($home_no[4] != 8) {
			$errors[] = "Invalid home_no! number starts with +353 8";
		}
				
		else if ($home_no[5] != 5 and $home_no[5] != 6 and $home_no[5] != 7 and $home_no[5] != 8 and $home_no[5] != 9) {
			$errors[] = "Invalid home_no! number starts with +353 85, 86, 87, 88, 89";
		}
				
		else if(strlen($home_no) != 13 ){
			$errors[] = "Invalid home_no! very few or too much numbers. 13 numbers required";
		}
    }
    
    $membership= $_POST['membership'];
		  
		  
	

    if(!isset($_POST['gender'])){
		$errors[] = "please select gender";
    }


    $date_of_birth= $_POST['date_of_birth'];
	$gender= $_POST['gender'];
		
	$todayYear = getdate();
	$newDate = date('d/m/Y', strtotime($_POST['date_of_birth']));
		   
	$enteredDate =  substr($newDate, 0,2);
	$enteredMonth = substr($newDate, 3,2);
	$enteredYear =  substr($newDate, 6,4);
	$currentYear =  $todayYear['year'];
	$currentmonth =  $todayYear['mon'];
	$currentday =  $todayYear['mday'];
		
	if($enteredYear  > $currentYear || $enteredYear  >= $currentYear && $enteredMonth > $currentmonth || 
	$enteredDate  > $currentday && $enteredYear  >= $currentYear && $enteredMonth >= $currentmonth  ){
		$errors[] = "Invalid date for year";
	}
		
	if ( $currentYear - $enteredYear  < 18 ){
		$errors[] = "Age must be less greater than 18";
	}

    $email = trim($_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid email address.";
	}
	
	$eircode = trim($_POST['eircode']);
	if (!preg_match("/^[A-Z0-9 ]*$/",$eircode)) {
		$errors[] = "Invalid eircode, use only Upper case alphabets and numbers and white spaces";
	}
	else {
		if(strlen($eircode) != 7){
        	$errors[] = "Invalid eircode! very few or too much numbers.";
        }
        else if ($eircode[0] != "D"){
        	$errors[] = "Invalid eircode! Starts with D";
        }
        else if (!preg_match("/^[0-9 ]*$/",$eircode[1], $eircode[2])) {
            $errors[] = "Invalid eircode, 2nd and 3rd letter are number only";
        }
        else if (!preg_match("/^[0-9 A-Z]*$/",$eircode[3], $eircode[4],$eircode[5], $eircode[6] )) {
            $errors[] = "Invalid eircode, 4th, 5th, 6th, 7th letter are numbers or Capital alphabets only";
        }
        
    }
    

    
    
    if (empty($errors)) { 
        //require('/home/s2961591/connection.php'); // open database connection
		
		//$query = "CREATE TABLE registerStudent (studentNumber VARCHAR(25) NOT NULL, firstName VARCHAR(25) NOT NULL, lastName VARCHAR(25) NOT NULL, DOB date NOT NULL, mobileNo VARCHAR(15) NOT NULL, homeNo VARCHAR(15) NOT NULL, addressL1 VARCHAR(100) NOT NULL, addressL2 VARCHAR(100), gender VARCHAR(10) NOT NULL, studyMode VARCHAR(10) NOT NULL, major VARCHAR(25) NOT NULL, courses VARCHAR(30) NOT NULL, startDate VARCHAR(15) NOT NULL, endDate VARCHAR(20) NOT NULL, PRIMARY KEY (studentNumber))";
		
		//$query = "INSERT INTO registerStudent(studentNumber, firstName, lastName, DOB, mobileNo, homeNo, addressL1, addressL2, gender, studyMode, major ,courses ,startDate, endDate ) VALUES ('$student_number', '$first_name', '$last_name', '$date_of_birth', '$mobile_no', '$home_no', '$address1', '$address2', '$gender', '$studyMode', '$major', '$courses', '$start', '$endTime')";
		
		
		//$result = @mysqli_query($db_connection, $query); // run query
		//if($result) { // if the query ran. successfully
		//	echo "<h2>Success! Student Register!</h2>";
		//}
			
		//else {
		//	echo "<br>Error! <h2>Student Register unsuccessful, Student Number already present in database</h2>".mysqli_error($db_connection);
		//}
		
		
        //mysqli_close($db_connection);
        //echo "<br><a href=index.html>Home</a>";
        echo "registered";
    }

    else{
        include 'registration.php';

        foreach ($errors as $msg) {
            echo "- $msg <br/>";
        }
    }
}