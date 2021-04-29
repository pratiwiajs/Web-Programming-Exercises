<?php

setcookie("username", null, time()-1, '/');
header("Location: form.html");

?>