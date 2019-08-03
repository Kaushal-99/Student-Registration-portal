<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../index.html');
}
elseif ($_SESSION['logintype']!='SS') {
    header('Location: ../index.html');
}
?>