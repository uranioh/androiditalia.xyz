<meta name="robots" content="noindex">


<?php

echo $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_HOST'] == 'androiditalia.xyz') {
    header("Location: http://t.me/androiditaliaai");
    die();
}
else {
    header("Location: http://huffiy.net");
    die();
}

die();
?>