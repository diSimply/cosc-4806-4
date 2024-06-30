<?php
class Reminder{
  // CRUD - Create , Read, Update, Delete
  public function create_reminder($user_id, $subject){
    $db = db_connect();
    $statement = $db->prepare("insert into reminders (user_id, subject) values (:user_id, :subject);");
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':subject', $subject);
    $statement->execute();
  }

  public function get_reminders($user_id){
    $db = db_connect();
    $statement = $db->prepare("select * from reminders where user_id = :user_id;");
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
}


?>