<!DOCTYPE html>
<html>
<head>
  <?php
  $title = "Feedback";
  require_once "blocks/head.php"
  ?>

</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
  <div id="leftCol">
      <form method="POST" action="feedback_document.php">
      <input type="text" placeholder="Name" id="name" name="name"><br />
      <input type="text" placeholder="Password" id="subject" name="password"><br />
      <input type="text" placeholder="Email" id="email" name="email"><br />
      <input type="submit" value="Send">
      </form>
  </div>
  <?php require_once "blocks/rightCol.php"?>
</div>
<?php require_once "blocks/footer.php"?>
</body>
</html>