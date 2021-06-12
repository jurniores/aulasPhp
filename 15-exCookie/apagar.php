<?php
setcookie('name','',time()-3600);
header('Location: user.php');
exit;
