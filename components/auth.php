<?php



  class auth
  {
    public $db;

    public function __construct($db)
    {
      $this->db = $db;
    }

    public function register($email, $password)     //from index.php
    {
      $this->db->store('users', [         //call class store/indicate table name/
        'email' => $email,
        'password' => md5($password)   //encryption pass
      ]);
    }
    public function Login()
    {

    }
  }
 ?>
