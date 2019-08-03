<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../index.html');
}
elseif ($_SESSION['logintype']!='HOD' && $_SESSION['logintype']!='CC') {
    header('Location: ../index.html');
}
?>