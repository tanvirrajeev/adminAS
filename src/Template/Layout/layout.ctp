<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($title)? $title : ""; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= $this->Url->css('bootstrap.min.css') ?>">
</head>
<body>

<div class="container">
  <?php echo $this->Flash->render(); ?>
  <?php echo $this->fetch("content"); ?>

</div>

</body>
</html>
