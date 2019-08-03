<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../index.html');
}
elseif ($_SESSION['logintype']!='STUDENT') {
    header('Location: ../index.html');
}
?>