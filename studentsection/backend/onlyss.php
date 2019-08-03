<?php
if(!isset($_SESSION['logintype'])){
    header('Location: ../');
}
elseif ($_SESSION['logintype']!='SS') {
    header('Location: ../');
}
?>