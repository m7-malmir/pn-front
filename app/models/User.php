<?php

class User
{
  use Model;
  protected $table = 'users'; 
  protected $allowedColumns = ['users_uid', 'users_pwd'];
  public function validate($data)
  {
    $this->errors = [];
    if (empty($data['users_uid'])) {
      $this->errors['users_uid'] = "username is required";
    }
    if (empty($data['users_pwd'])) {
      $this->errors['users_pwd'] = "Password is required";
    }
    if (empty($this->errors)) {
      return true;
    }
    return false; 
  }
}