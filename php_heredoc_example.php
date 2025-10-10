<?php
$title = "Article Title";
$detail = "Article content, article details...";

echo <<<CSS
<style>
  .article { margin: 4px; padding: 6px; border-bottom: 1px solid silver; }
  .title { margin: 0px; border-bottom: 1px dashed red; color: orange; }
</style>
CSS;

echo <<<HTML
<div class="article">
  <h3 class="title">$title 1</h3>
  $detail
</div>

<div class="article">
  <h3 class="title">$title 2</h3>
  $detail
</div>
HTML;
?>
