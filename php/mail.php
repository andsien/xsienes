<?php
try {
    $xcemail = $_POST['xcemail'];
    $xcmessage = $_POST['xcmessage'];

    if($xcemail !="" && $xcmessage !="") {
        mail($xcemail,"Xsienes Inquiry",$xcmessage);
        echo "Email Sent";
    }else{
        echo "Error Email not sent!";
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}