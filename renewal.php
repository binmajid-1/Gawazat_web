<?php
require "ln/config.php";
require "Renewal of passport.php";

if (isset($_POST['sub'])){
$firstName_ar = stripcslashes($firstName_ar);  
$secondName_ar = stripcslashes($secondName_ar); 
$thirdName_ar = stripcslashes($thirdName_ar); 
$lastName_ar = stripcslashes($lastName_ar); 
$firstName_en = stripcslashes($firstName_en); 
$secondName_en = stripcslashes($secondName_en); 
$thirdName_en = stripcslashes($thirdName_en); 
$lastName_en = stripcslashes($lastName_en); 
$ssn_card = stripcslashes($ssn_card); 
$ssn_passport = stripcslashes($ssn_passport); 
// $phone = stripcslashes($phone); 
$data_birth = stripcslashes($data_birth); 
// $motherNmae = stripcslashes($motherNmae); 
// $mothernation = stripcslashes($mothernation); 
// $acqfirst1 = stripcslashes($acqfirst1); 
// $acqphone1 = stripcslashes($acqphone1); 
// $acqrelation1 = stripcslashes($acqrelation1); 
// $acqadd1 = stripcslashes($acqadd1); 
// $acqsecond2 = stripcslashes($acqsecond2); 
// $acqphone2 = stripcslashes($acqphone2); 
// $acqadd2 = stripcslashes($acqadd2); 
// $streetadd = stripcslashes($streetadd); 
// $stateadd = stripcslashes($stateadd); 
// $cityadd = stripcslashes($cityadd); 

$firstName_ar = mysqli_real_escape_string($conn, $firstName_ar);  
$secondName_ar = mysqli_real_escape_string($conn, $secondName_ar);
$thirdName_ar = mysqli_real_escape_string($conn, $thirdName_ar);
$lastName_ar = mysqli_real_escape_string($conn, $lastName_ar);
$firstName_en = mysqli_real_escape_string($conn, $firstName_en);
$secondName_en = mysqli_real_escape_string($conn, $secondName_en);
$thirdName_en = mysqli_real_escape_string($conn, $thirdName_en);
$lastName_en = mysqli_real_escape_string($conn, $lastName_en);
$ssn_card = mysqli_real_escape_string($conn, $ssn_card);
$ssn_passport = mysqli_real_escape_string($conn, $ssn_passport);
// $phone = mysqli_real_escape_string($conn, $phone);
$data_birth = mysqli_real_escape_string($conn, $data_birth);
// $motherNmae = mysqli_real_escape_string($conn, $motherNmae);
// $mothernation = mysqli_real_escape_string($conn, $mothernation);
// $acqfirst1 = mysqli_real_escape_string($conn, $acqfirst1);
// $acqphone1 = mysqli_real_escape_string($conn, $acqphone1);
// $acqrelation1 = mysqli_real_escape_string($conn, $acqrelation1);
// $acqadd1 = mysqli_real_escape_string($conn, $acqadd1);
// $acqsecond2 = mysqli_real_escape_string($conn, $acqsecond2);
// $acqrelation2 = mysqli_real_escape_string($conn, $acqrelation2);
// $acqphone2 = mysqli_real_escape_string($conn, $acqphone2);
// $acqadd2 = mysqli_real_escape_string($conn, $acqadd2);
// $streetadd = mysqli_real_escape_string($conn, $streetadd);
// $stateadd = mysqli_real_escape_string($conn, $stateadd);
// $cityadd = mysqli_real_escape_string($conn, $cityadd);



$sql = "select * 
FROM users 
where  users.ssn = '$ssn_card'";

$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
// echo $count;
if($count == 1){  

$update = "UPDATE users
SET users.AR_FirstName = '$firstName_ar',
users.AR_MidName = '$secondName_ar',
users.AR_ThirdName = '$thirdName_ar',
users.AR_LastName = '$lastName_ar',
users.EN_FirstName = '$firstName_en',
users.EN_MidName = '$secondName_en',
users.EN_ThirdName = '$thirdName_en',
users.EN_LastName = '$lastName_en',
users.DateOfBirth = '$data_birth'
WHERE
    users.ssn = '$ssn_card'";
 $result1 = $conn->query($update);
 if($result){
   header("Location:filesRenewal of passport.php");
}
else{
  echo json_encode(['status'=>'error','message'=>'An error occurred editing the information.']);
  }  

$conn->close();



} else{  
  echo "<h1> YOU DON'T Have Passport , Create Passport First</h1>";  
}

}


?>