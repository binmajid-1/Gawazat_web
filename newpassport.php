<?php
require "ln/config.php";
error_reporting(0);
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpassport</title>
    <link rel="stylesheet" href="css/newpassport.css">
    <link rel="stylesheet" href="js/newpassport.js">
</head>

<body>

 
    <section class="container">
        <header><b>Data registration</b></header>
        <button type="button" class="button--transparent button--close"><a href="new.html">
            <svg class="nc-icon glyph" xmlns="progress.html" xmlns:xlink="progress.html" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
            <span class="visuallyhidden">Return to Product Page</span>
          </a></button>
          <p dir="rtl">
              شروط الموافقة:
              <br><br>
        1-موافقة المستخدم: يجب أن يوافق المستخدم بوضوح على استخدام بياناته الشخصية في إصدار جواز السفر
        الإلكتروني ومشاركتها مع الجهات المعنية.
    </p> <br>  <p dir="rtl">
        2-صحة البيانات: يجب على المستخدم تقديم بيانات صحيحة وموثوقة لإصدار جواز السفر الإلكتروني، ويجب 
        أن يكون المستخدم مسؤولاً عن صحة هذه البيانات.
    </p> <br>
    <p dir="rtl">
        3-الامتثال للقوانين: يجب أن يكون المستخدم ملتزمًا بالقوانين واللوائح المحلية والدولية المتعلقة بإصدار جواز
        السفر الإلكتروني واستخدام البيانات الشخصية.
        <br><br>
        4-الأمان والخصوصية: يجب أن يتم حماية بيانات المستخدم وضمان سرية المعلومات الشخصية وعدم مشاركتها
        مع أطراف غير مخولة.
    </p><br>
    <p dir="rtl">
        5-موافقة على الاستخدام: يجب أن يوافق المستخدم على استخدام بياناته الشخصية لأغراض إصدار جواز السفر
        الإلكتروني والتحقق من هويته وتحقيق الأمان وتسهيل السفر الدولي.
        <br><br>
        6-تحديث البيانات: يجب على المستخدم تحديث بياناته الشخصية عند الحاجة والإبلاغ عن أي تغييرات في البيانات المقدمة.
            <br><br>
        7-استخدام البيانات: يجب على المشروع تحديد كيفية استخدام البيانات المقدمة من المستخدم وتوضيح الأغراض 
        المحددة لجمعها ومعالجتها وتخزينها ومشاركتها.
        </p><br><br>
<center> ادخل الاسم الرباعي باللغة العربية </center>
        <form action="newpass.php" class="form" method = "POST"> 
            <div class="column">
            <div class="input-box">
                    
                    <input type="text" placeholder="ادخل الاسم الاول" required name="user_fname_ar">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="ادخل الاسم الثاني" required name="user_sname_ar">
                </div>
            </div>

            <div class="column">
                <div class="input-box">
                    <input type="text" placeholder="ادخل الاسم الثالث" required name="user_tname_ar">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="ادخل الاسم اللقب" required name="user_lname_ar">
                </div>
            </div>
            <br>
         <center> ادخل الاسم الرباعي باللغة الأنجليزية </center>
            <div class="column">
                <div class="input-box">
                    
                    <input type="text" placeholder="Enter First name" required name="user_fname_en">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter Secend name" required name="user_sname_en">
                </div>
            </div>

            <div class="column">
                <div class="input-box">
                    <input type="text" placeholder="Enter Third name" required name="user_tname_en">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter Last name" required name="user_lname_en">
                </div>
            </div>

            <div class="input-box">
                <label>ID number of personal card </label>
                <input type="text" placeholder="Enter Your The ID number" required name="user_id_card">
            </div>




            <div class="column">

                <div class="input-box">
                    <label>Phone</label>
                    <input type="tel" placeholder="Enter Your Phone" required name="user_phone">
                </div>


                <div class="input-box">
                    <label>Date of Pirth</label>
                    <input type="date" placeholder="Enter Date of Pirth " required name="user_data_birth">
                </div>
            </div>

                <div class="input-box">
                    <label>The Place of birth </label>
                    <input type="text" placeholder="Enter The Place of birth " required name="user_place_birth">
                </div>
            </div>
                <div class="input-box">
                    <label>Occupation </label>
                    <input type="text" placeholder="Enter Your Occupation " required name="user_occupation">
                </div>
            </div>

                <div class="input-box">
                    <label>Third Mother Name</label>
                    <input type="text" placeholder="Enter Mother Name " required name="user_mother_name">
                </div>
                <h3>nationality of mother</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="nation" checked >
                        <label for="check-male">yemeni</label>
                    </div>
            </div>

                <div class="input-box">
                    <label>Third Father Name</label>
                    <input type="text" placeholder="Enter Father Name " required name="user_father_name">
                </div>
            </div>


            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" checked value="1">
                        <label for="check-male">Male</label>
                    </div>

                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="2">
                        <label for="check-female">female</label>
                    </div>
                </div>
            </div>


            <div class="Social">
                <h3>Social status</h3>
                <div class="Social-option">
                    <div class="Socialstatus">
                        <input type="radio" id="check-married" name="social" checked value="1">
                        <label for="check-married">Married</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="social" value="2">
                        <label for="check-Single">Single</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="social" value="3">
                        <label for="check-Single">divorcee</label>
                    </div>
                </div>
            </div>


            <div class="Social">
                <h3>Color of Hair</h3>
                <div class="Social-option">
                    <div class="Socialstatus">
                        <input type="radio" id="check-married" name="hair" checked value="Brown">
                        <label for="check-married">Brown</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="hair" value="Black">
                        <label for="check-Single">Black</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="hair" value="Other">
                        <label for="check-Single">Other</label>
                    </div>
                </div>
            </div>
            <div class="Social">
                <h3>Color of Eyies</h3>
                <div class="Social-option">
                    <div class="Socialstatus">
                        <input type="radio" id="check-married" name="eye" checked value="Brown">
                        <label for="check-married">Brown</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="eye" value="Black">
                        <label for="check-Single">Black</label>
                    </div>
                    <div class="Social-option">
                        <div class="Socialstatus">
                        <input type="radio" id="check-Single" name="eye" value="Other">
                        <label for="check-Single">Other</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <label>Tow acquaintance people</label>
                <input type="text" placeholder="Enter First on " required name="user_acq_first">
                <input type="text" placeholder="Enter his Home Address " required name="user_acq_frist_add">
                <div class="input-box">
                    <label>Phone</label>
                    <input type="tel" placeholder="Enter his Phone" required name="user_acq_phone">
                </div>
                <div class="input-box">
                    <label>relationship</label>
                    <input type="text" placeholder="Enter the relationship " required name="user_acq_relationship">
                </div>
                <br>
                <input type="text" placeholder="Enter Second one" required name="user_acq_second">
                <input type="text" placeholder="Enter his Home Address " required name="user_acq_second_add">
                <div class="input-box">
                    <label>Phone</label>
                    <input type="tel" placeholder="Enter his Phone" required name="user_acq_second_phone">
                </div>
                <div class="input-box">
                    <label>relationship</label>
                    <input type="text" placeholder="Enter the relationship " required name="user_acq_second_relationship">
                </div>

            </div>

            <div class="input-box">
                <label>Home Address</label>
                <input type="text" placeholder="Enter Your Home Address " required name="user_address_street">
                <br>
                <input type="text" placeholder="Enter Your state " required name="user_address_state">
                <br>
                <input type="text" placeholder="Enter Your city" required name="user_address_city">

            </div> 




            <button type="submit" value="Sumbit" name="sub">submit</button>
        </form>
    </section>

</body>

</html>
<?php 
if (isset($_POST['sub'])){
    $firstName_ar = $_POST['user_fname_ar'];
    $secondName_ar = $_POST['user_sname_ar'];
    $thirdName_ar = $_POST['user_tname_ar'];
    $lastName_ar = $_POST['user_lname_ar'];
    $firstName_en = $_POST['user_fname_en'];
    $secondName_en = $_POST['user_sname_en'];
    $thirdName_en = $_POST['user_tname_en'];
    $lastName_en = $_POST['user_lname_en'];
    $ssn_card = $_POST['user_id_card'];
    $phone = $_POST['user_phone'];
    $data_birth = $_POST['user_data_birth'];
    $palce_birth = $_POST['user_place_birth'];
    $Occupation = $_POST['user_occupation'];
    $motherNmae = $_POST['user_mother_name'];
    $mothernation = $_POST['nation'];
    $fatherNmae = $_POST['user_father_name'];
    $gender = $_POST['gender'];
    $socialstaus = $_POST['social'];
    $haircolor = $_POST['hair'];
    $eyecolor = $_POST['eye'];
    $acqfirst1 = $_POST['user_acq_first'];
    $acqphone1 = $_POST['user_acq_phone'];
    $acqrelation1 = $_POST['user_acq_relationship'];
    $acqadd1 = $_POST['user_acq_frist_add'];
    $acqsecond2 = $_POST['user_acq_second'];
    $acqphone2 = $_POST['user_acq_second_phone'];
    $acqrelation2 = $_POST['user_acq_second_relationship'];
    $acqadd2 = $_POST['user_acq_second_add'];
    $streetadd = $_POST['user_address_street'];
    $stateadd = $_POST['user_address_state'];
    $cityadd = $_POST['user_address_city'];





}

?>