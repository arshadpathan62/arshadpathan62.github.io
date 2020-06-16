<?php
$name=$_REQUEST['name'];
$Subject=$_REQUEST['Subject'];
$email=$_REQUEST['_replyto'];
$message=$_REQUEST['message'];
mail("arshadpathan6297@gmail.com",$Subject,$message,"From: $name <$email>");
echo "<script type='text/javascript'>alert('Your email has sent successfully');
window.history.go(-1);
</script>";

?>