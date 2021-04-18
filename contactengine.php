<?php

$EmailTo = "jeff@jhchang.com";
$First = Trim(stripslashes($_POST['First'])); 
$Last = Trim(stripslashes($_POST['Last'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $First;
$Body .= " ";
$Body .= $Last;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, "Inquiry from jhchang.com", $Body, "From: <$Email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/?mail=success\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/?mail=error\">";
}
?>