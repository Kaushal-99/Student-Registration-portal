<?php

session_start();

session_destroy();
header('Refresh:1; url=../');


?>