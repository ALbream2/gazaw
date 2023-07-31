<form method="GET">
   

 kald <input  type="text" name="JJ"/>
<button type="submit">send</button>

</form>

<?php


 //echo $_GET ['JJ'];  /// هون راح يطلع الخطا 


if(isset ($_GET['JJ'])){


    echo $_GET ['JJ'];
}
else{


}

//////// فائدة ال isset

//انو في حال عدم تواجد  فايربل من اي نوع  من اي نوع للامر المراد طبعه    

   // يقوم بطباعة الخطا لاكن باخفاء مسار الملف للحفاظ على الامان///
?>

