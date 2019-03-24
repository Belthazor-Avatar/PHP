<?php
if (isset($_SERVER['REMOTE_ADDR'])) { $myip_addr = $_SERVER['REMOTE_ADDR']; }
echo <<<_END
$myip_addr
_END;
?>
