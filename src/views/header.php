<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TZ</title>
    <link href="<?= URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>/assets/css/style.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="<?= URL ?>/">Post</a></li>
      <li><a href="<?= isset($_SESSION['user'])?URL.'/user/logout':URL.'/user'; ?>"><?= isset($_SESSION['user'])?'Logout':'Login'; ?></a></li>
    </ul>
  </div>
</nav>