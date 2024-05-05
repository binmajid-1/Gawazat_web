<?php
require "ln/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>files newpassport</title>
    <link rel="stylesheet" href="css/filesnewpassport.css">
    <link rel="stylesheet" href="js/filesnewpassport.js">
</head>

<body>
    <section class="container"> 
        <header><b>Data registration</b></header>
        <button type="button" class="button--transparent button--close"><a href="newpassport.html">
            <svg class="nc-icon glyph" xmlns="progress.html" xmlns:xlink="progress.html" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
            <span class="visuallyhidden">Return to Product Page</span>
          </a></button>
       
        <form action="upload.php" method="post" class="form" enctype = "multipart/form-data";>
            
            <div class="input-box1">
                <label>Your image</label>
                <input type="file" placeholder="Enter Your image" required name="user_image">
            </div>


            <div class="input-box1">
                <label>Enter Your image from National ldentity</label>
                <input type="file" placeholder="Enter Your image" required name="ssn_image">
            </div>

           <button type="submit" name="sub">Sumbit</button>

        </form>
    </section>
</body>

</html>