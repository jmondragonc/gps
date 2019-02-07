<?php
require_once "recaptchalib.php";

// your secret key
$secret = "6LcRIxUUAAAAAJGq84pjtUXmyjOi6GQqUNrsqvaB";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {
    echo 'ok';
} else {
    echo 'no';
}
?>