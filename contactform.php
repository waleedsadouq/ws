<?php

if (isset ($_POST['send'])) {
  $name = $_POST['Company name']
    $emailFrom = $_POST['email']
      $Phone Number = $_POST['Phone Number']
        $message = $_POST['message']

  $mailTo = "waleedsadouq@gmail.com";
  $headers = "From: My website"
  $txt = "You have received an e-mail from -". $name.".\n\n".$message;
  mail($mailTo, $txt, $headers);
header("Location: i.html?mailsend")
}
