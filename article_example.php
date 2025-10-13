<?php
$title1 = 'New feature of PHP 5.4.0';
$detail1 = 'Short tags like &lt;?...&gt; have become default.';
$detail2 = 'New array support: $array=["first_name"=>"Kormos", "last_name"=>"Nomad"];';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= $title1 ?></title>
<style>
.article { margin: 4px; padding: 6px; border-bottom: 1px solid silver; }
.heading { margin: 0px; border-bottom: 1px dashed red; color: orange; }
</style>
</head>
<body>

<div class="article">
  <h3 class="heading"><?= $title1 ?></h3>
  <?= $detail1 ?>
</div>

<div class="article">
  <h3 class="heading"><?= $title1 ?></h3>
  <?= $detail2 ?>
</div>

</body>
</html>
