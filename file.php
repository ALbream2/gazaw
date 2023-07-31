


<form  method="POST"  enctype="multipart/form-data"   >

<input type="file"  name="img" required/>

<button type="submit" name="uplod">ارسال  </button>
</form>

<?php
if(isset($_POST['uplod'])){


    //echo  $name = $_FILES ['img'] ['name'];
    // echo  $name = $_FILES ['img']  ['tmp_name'];

 
    move_uploaded_file($_FILES['img']['tmp_name'],'imgs/' .$_FILES['img']['name']);

}
?>


<?php

///////// 'طريق رفع الملفات'///


///////////  لتخزين اي ملف تم رفعه عل السيرفر نستخدم///

//////  move_uploaded_file  ///     وايضا لازم نتبع التعليمات الي في الاعلى 

//// //////////                               وبتم  تخزين الملفات بشكل مباشر في ملف الكود ذاخل ملف ال html_entity_decode  
/////////م


   




//////////// ايضا لتخزين الملفات في ملف خاص نضع 

//move_uploaded_file($_FILES['img']['tmp_name'],'imgs/'<=================== هون بنحط اسم المسار الملف الجديد  ====>  .$_FILES['img']['name']);


