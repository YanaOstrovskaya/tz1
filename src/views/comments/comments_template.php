<li>
        <div class="media panel panel-default">
        	<div class="media-left media-top ">
    <img src="<?php echo $comment['photo'];?>" class="media-object" style="width:40px">
  </div>
  <div class="media-body">
         <h4 class="media-heading"><?php echo $comment['first_name'].' '.$comment['last_name'];?> <small><i>Posted on <?php echo $comment['date']; ?></i></small></h4>
    <p><?php echo $comment['comment'];?></p>
  </div> 
  <?php if(isset($_SESSION['user'])):?>
  <p id="commentButton"><a style="cursor: pointer;">Comment</a></p>
  <?php endif; ?>
  <form id="comment" style="display:none;" class="form-inline" action="<?= URL ?>/home/comment" method="POST">
      <div class="form-group">
      <input type="hidden" value="<?php echo $comment['id'];?>" name="idComment">
  <textarea name="comment" cols="50" class="form-control"></textarea>
  <input type="submit" class="btn btn-default">
  </div>
  </form>
    </div>
    <?php if(!empty($comment['children'])):?>
    <ul>
        <?php echo $this->getCommentsTemplate($comment['children']);?>
    </ul>  
    <?php endif;?> 
</li>

