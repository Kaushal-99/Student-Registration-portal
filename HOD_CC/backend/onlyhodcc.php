<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../');
}
elseif ($_SESSION['logintype']!='HOD' && $_SESSION['logintype']!='CC') {
    header('Location: ../');
}
?>