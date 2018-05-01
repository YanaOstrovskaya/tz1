<?php
class Comment extends Model{
 public function getComment(){
     $st= self::$pdo->query('SELECT comments.comment, comments.date, comments.id, comments.parent_id, users.first_name, users.last_name, users.photo FROM comments JOIN users ON comments.user_uid = users.uid ORDER BY comments.id');
return $st->fetchAll(PDO::FETCH_ASSOC);

}
	static function addComment($comment, $user_uid){
$st = self::$pdo->prepare("INSERT INTO comments (comment, user_uid, date) VALUES(:comment, :user_uid, :date)");
$st->bindParam(':comment', $comment, PDO::PARAM_STR);
$st->bindParam(':user_uid', $user_uid, PDO::PARAM_INT);
$st->bindParam(':date', date("Ymd"), PDO::PARAM_INT);
$st->execute();
	}
	
	static function addChildrenComment($comment, $idComment, $user_uid){
$st = self::$pdo->prepare("INSERT INTO comments (comment, parent_id, user_uid, date) VALUES(:comment, :parent_id, :user_uid, :date)");
$st->bindParam(':comment', $comment, PDO::PARAM_STR);
$st->bindParam(':parent_id', $idComment, PDO::PARAM_INT);
$st->bindParam(':user_uid', $user_uid, PDO::PARAM_INT);
$st->bindParam(':date', date("Ymd"), PDO::PARAM_INT);
$st->execute();
	}
}