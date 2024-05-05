<?php
ob_start();
require "ln/config.php";
require "newpassport.php";
if (isset($_POST['sub'])) {
   // Prepare the query 
  $query = "SELECT * FROM users WHERE ssn = '$ssn_card'"; 
  // Execute the query 
  $result = $conn->query($query); 
  // Check if the email exists in the database 
  if (!$result->num_rows > 0) { 
    $sql1 = "INSERT INTO users(AR_FirstName,AR_MidName,AR_ThirdName,AR_LastName,EN_FirstName,EN_MidName,EN_ThirdName,EN_LastName,DateOfBirth,PlaceOfBirth,Occupation,phonenumber,ssn,GenderID_id,socialstatuses_id)
        VALUES ('$firstName_ar', '$secondName_ar', '$thirdName_ar','$lastName_ar','$firstName_en','$secondName_en','$thirdName_en','$lastName_en','$data_birth','$palce_birth','$Occupation','$phone','$ssn_card','$gender','$socialstaus')";
        $sql2  = "INSERT INTO personal_details (hair_color,eye_color) values ('$haircolor','$eyecolor') ";  
        $sql3 ="INSERT INTO curren_address(city_add,state_add,street_add) values ('$cityadd','$stateadd','$streetadd')";  
        $sql4 ="INSERT INTO knowldage(first_known,relationship_one,address_one,phone_one) values('$acqfirst1','$acqrelation1','$acqadd1','$acqphone1')";
        $sql5 ="INSERT INTO  knowldage2(second_known,relationship_two,address_two,phone_two) values ('$acqsecond2','$acqrelation2','$acqadd2','$acqphone2')"; 
        $sql6  ="INSERT INTO parents_details(father_name,mother_name,mother_nationality) values ('$fatherNmae','$motherNmae','$mothernation')  ";
    if ( $conn->query($sql1) == true && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5) && $conn->query($sql6)) {
                header("Location:filesnewpassport.php");
            }
                else{
                echo 'Error: '. mysqli_error($conn);
                }
  } else { 
    echo '<h1> You Have a passport </h1>';
  }

  }

?>