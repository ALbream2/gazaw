<?php


////GET و POST و isset  ادوات ارسال البيانات الي قاعدة البانات



///GET  //  من سلبياتها انها بتظهر للمستخدم البيانات الي تم ارسالها من خلال الرابط وايضا المتصفح بيحفظها//

///POST //  من ايجابيتها انها بترسل البيانات بشكل مشفر (مخفي)وما بتظهر مجتوي الارسال للمستخدم او للمتصفح عن طريق الرابط///







?>

<form method="GET">  ****/**/هون بنحدد اي اداة راح نستخدمها لتكون الوسيط بين الموقع والسيرفر***/// <br>



firstnames <input type="text"   name="n1"    ///   (من خلال هالاسم السيرفر راح يعرف على اي عنصر نتحدث حتى نرسل البيانات بشكل صحيح)///  /> <br>
 MObile <input type="number"      name="las"     /><br>
 MObile2 <input type="number"      name="la3s"     /><br>
emai <input type="email"             name="email"    /> <br>
birthday <input type="date"              name="age" /> <br>
Accept <input type="checkbox"            name="true"  /> <br>
<button type="submit"  name="send" ><mark>ارسال </mark> </button>


</form>


<?php







if(isset($_GET['send'])) {
 
    echo $_GET['la3'] + $_GET['la3s']; }

?>