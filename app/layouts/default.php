<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Your Name">
  <?=$this::getMeta(); ?>
  <link rel="icon" type="image/png" href="/favicon.png" />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
  
  <link href="/dist/styles.css" rel="stylesheet">
  
</head>
<body>
  <?=$content?>
  
  <?=$this->component('footer')?>
  
  <script>
    var serverUrl = "<?=siteUrl()?>";
  </script>
  <script src="/dist/app.js"></script>
  <?=$scripts?>
</body>
</html>
