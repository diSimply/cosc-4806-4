<?php
class Reminders extends Controller {
  
  public function index() {
    // Get the user id from the session and get all the reminders for that user
    $user_id = $_SESSION['user_id'];
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_reminders($user_id);
    // Pass the reminders to the index page
    $this->view('reminders/index', ['reminders' => $list_of_reminders]);
  }
}

?>