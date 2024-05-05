<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Replacement of lost.css">
    <link rel="stylesheet" href="js/Replacement of lost.js">
    <title>Replacement of lost</title>
</head>
<body>
    <section class="container">
        <header><b>Data registration</b></header>
        <button type="button" class="button--transparent button--close"><a href="Replacement.html">
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
                </p>
                <form action="lost.php" method="post" class="form" enctype = "multipart/form-data";>
            
            <div class="input-box1">
                <label>Your image</label>
                <input type="file" placeholder="Enter Your image" required name="user_image">
            </div>
            
<br>
            <div class="input-box1">
                <label>Police Report</label>
                <input type="file" placeholder="Enter Your passport" required name="user_police">
            </div>
<br>

            <div class="input-box1">
                <label>Enter Your image from National ldentity</label>
                <input type="file" placeholder="Enter Your national identity" required name="ssn_image">
            </div>
<br>
           <button type="submit" name="sub">Sumbit</button>

        </form>
</body>
</html>