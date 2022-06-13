<?php

declare(strict_types=1);

namespace PHP\Messages;

use PHP\Global\Validator;

class OldMessagesLoader extends InitialMessagesLoader {

  public function additionalSetUp() {
    if(!filter_var($_GET['oldest'], FILTER_VALIDATE_INT))
      Validator::failureExit('Niepoprawny numer ID wiadomości.');

    $this -> oldest_message_id = $_GET['oldest'];
    $this -> limit = 150;

    $this -> return_data = new class {
      public $messages_data = [];
      public $oldest_message_id;
    };
  }

  public function includeInitialSpecificData() { return; }

}









