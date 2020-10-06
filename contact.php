<?php
if($_POST["message"]) {
    mail('aaplibatami@gmail.com', $_POST['subject'], $_POST['message']);
}
?>