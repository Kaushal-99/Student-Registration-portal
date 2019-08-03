<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../');
}
elseif ($_SESSION['logintype']!='STUDENT') {
    header('Location: ../');
}
?>