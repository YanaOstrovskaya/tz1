<div class="container">
  <div class="row">
    <div class="col-md-12">
        
        <?php if(isset($_SESSION['message'])): ?>
<div class="alert alert-danger">
 <?php echo $_SESSION['message']; ?>
</div>

	<?php endif; ?>
        
        <?php if(isset($_SESSION['user'])): ?>
<form action="<?= URL ?>/home/create" method="POST">
<div class="form-group">
  <label for="text">Message:</label>
  <textarea class="form-control" rows="5" name="text" id="text"></textarea>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php else: ?>
<p class="p"> Для того чтобы оставить сообщение или комментарий, пожалуйста, <a href="<?= URL ?>/user">авторизуйтесь</a></p>
<?php endif;?>
<?php
//echo '<pre>'.print_r($comments, true).'</pre>';
//echo '<pre>'.print_r($result, true).'</pre>';
?>
<div class="comments_wrap">
 <ul>
      <?php echo $comments;?>
   </ul>

</div>





    </div>
  </div>
</div>


