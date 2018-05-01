<?php
require_once('models/comment.php');
class Home extends Controller{
            private function buildTree(array $dataset) {
    $tree = array();
    $references = array();
    foreach ($dataset as $id => &$node) {
        $references[$node['id']] = &$node;
        $node['children'] = array();
        if (empty($node['parent_id'])) {
            $tree[$node['id']] = &$node;
        } else {
       
            $references[$node['parent_id']]['children'][$node['id']] = &$node;
        }
    }
 
    return $tree;
}

            private function getCommentsTemplate($comments){
    $html = '';
    foreach($comments as $comment){
        ob_start();
        include 'views/comments/comments_template.php';         
        $html .= ob_get_clean();
    }
    return $html;
}

    	    public function index(){
	   $comment = new Comment();
	   $comments = $comment->getComment();
	   $comments = $this->buildTree($comments);
	   $comments = array_reverse($comments);
	   
	    $comments = $this->getCommentsTemplate($comments);
        View::render('home/index', compact('result', 'comments', 'contact'));
	}
			public function create(){
		$comment = isset($_POST['text'])?strip_tags($_POST['text']):'';
		$user_uid = $_SESSION['user'];
		if(!empty($comment)){
		 $m = new Comment();
		$m::addComment($comment, $user_uid);
		unset($_SESSION['message']);
		}
		else{
		    $_SESSION['message'] = 'Invalid data';
		}
		header('Location: '.URL.'/');	
	}

			public function comment(){
		$comment = isset($_POST['comment'])?strip_tags($_POST['comment']):'';
		$idComment = isset($_POST['idComment'])?$_POST['idComment']:'';
		$user_uid = $_SESSION['user'];
		if(!empty($comment)){
		$m = new Comment();
		$m::addChildrenComment($comment, $idComment, $user_uid);
		unset($_SESSION['message']);
		}
		else{
		    $_SESSION['message'] = 'Invalid data';
		}
		header('Location: '.URL.'/');	
	}

}

