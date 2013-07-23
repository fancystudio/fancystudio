<?php
if($_POST["isSendMail"] == true){
  mail('info@fancystudio.sk', "komentar od zakaznika ".$_POST['name'], "text:\n ".$_POST['message']."\n \n"."zakaznikov email: ".$_POST['email']."\n"."zákazníkov telefón: ".$_POST['phone']."\n"."firma: ".$_POST['company'], "from: info@fancystudio.sk");
}else{
  header( 'Location: /' ) ;
}

?>