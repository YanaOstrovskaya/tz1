<?php
class UserModel extends Model{
    function addUser($data){
$st = self::$pdo->prepare("INSERT INTO users (uid, first_name, last_name, photo) VALUES(:uid, :first_name, :last_name, :photo)");
$st->bindParam(':uid', $data['uid'], PDO::PARAM_INT);
$st->bindParam(':first_name', $data['first_name'], PDO::PARAM_STR);
$st->bindParam(':last_name', $data['last_name'], PDO::PARAM_STR);
$st->bindParam(':photo', $data['photo'], PDO::PARAM_STR);

$st->execute();

}
static function getUid(){
return self::$pdo->query('SELECT uid FROM users')->fetchAll(PDO::FETCH_COLUMN);
}

}