<?php
ob_start();
require "ln/config.php";
require "filesRenewal of passport.php";
$img_uploaded = 0;

if(isset($_POST['sub'])){
    $image = time().$_FILES["user_image"]['name'];
    $image1 = time().$_FILES["ssn_image"]['name'];
    $image2 = time().$_FILES["user_police"]['name'];
    if(move_uploaded_file($_FILES['user_image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Gawazat/lost_images/'.$image ) && move_uploaded_file($_FILES['ssn_image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Gawazat/lost_images/'.$image1 ) && move_uploaded_file($_FILES['user_police']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Gawazat/lost_images/'.$image2 )){
        $target_file = $_SERVER['DOCUMENT_ROOT'].'/Gawazat/lost_images/'.$image ;
        $target_file1 = $_SERVER['DOCUMENT_ROOT'].'/Gawazat/lost_images/'.$image1 ;
        $target_file2 = $_SERVER['DOCUMENT_ROOT'].'/Gawazat/lost_images/'.$image2 ;
        $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $imagefiletype1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
        $imagefiletype2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
        $user_name = basename($_FILES['user_image']['name']);
        $user_name1 = basename($_FILES['ssn_image']['name']);
        $user_name2 = basename($_FILES['user_police']['name']);
        $photo = time().$user_name;
        $photo1 = time().$user_name1;
        $photo2 = time().$user_name2;
        if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype1 != "png" && $imagefiletype1 != "jpg" && $imagefiletype1 != "jpeg" && $imagefiletype1 != "png" && $imagefiletype2 != "jpg" && $imagefiletype2 != "jpeg" && $imagefiletype2 != "png")
        {
            ?>
            <script>
                alert("please upload photo having extencion .jpg/ .jpeg / .png");
                </script>
                <?php 

        }else if ($_FILES["user_image"]["size"] > 20000000 && $_FILES["ssn_image"]["size"] > 20000000 && $_FILES["user_police"]["size"] > 20000000)
        {
            ?>
            <script>
                alert("your photo exceed the size of 2 MB");
                </script>
                <?php
        } else {
            $img_uploaded = 1;
        }

        if($img_uploaded == 1)
        {
            $inser_query = mysqli_query($conn, "insert into lostimages(lost_user_img,lost_user_ssn,lost_user_police) values ('$photo','$photo1','$photo2')");
            if($inser_query > 0)
            {
                header("Location:card.php");
            }
        }else {
            ?> 
            <script>
                alert("image not upload");
                </script>
                <?php

        }


    }
}
?>