<?php
$page_title = "PHP from A to Z";
$heading = "Article Title";
$detail = "This is my article content.";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $page_title; ?></title>
  <style>
    .article { margin: 4px; padding: 6px; border-bottom: 1px solid silver; }
    .title { margin: 0px; border-bottom: 1px dashed red; color: orange; }
  </style>
</head>
<body>

<div class="article">
  <h3 class="title"><?php echo $heading; ?></h3>
  <?php echo $detail; ?>
</div>

<div class="article">
  <h3 class="title"><?php echo $heading; ?></h3>
  <?php echo $detail; ?>
</div>

</body>
</html>