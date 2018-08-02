<?php
try {
	$from = "contact@xsienes.com";
    $xcemail = $_POST['xcemail'];
    $xcmessage = $_POST['xcmessage'];
    $headers = "From: $from";
    if($xcemail !="" && $xcmessage !="") {
        mail($xcemail,"Xsienes Inquiry",$xcmessage, $headers, "-f " . $from);
        echo "Email Sent";
    }else{
        echo "Error Email not sent!";
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}