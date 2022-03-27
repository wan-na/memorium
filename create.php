<?php 
//  include_once 'administrator/class/Connection.php';
//  $connection = new Connection();
//  $connection->con();
//  class Create Extends Connection{
//     public $f_name;
//     public $m_name;
//     public $l_name;
//     public $gender;
//     public $type;
//     public $email;
//     public $passwordhash;
//     public function __construct($f_name, $m_name, $l_name, $gender, $type, $email, $passwordhash){
//         $this->f_name = $f_name;
//         $this->m_name = $m_name;
//         $this->l_name = $l_name;
//         $this->gender = $gender;
//         $this->type = $type;
//         $this->email = $email;
//         $this->passwordhash = $passwordhash;
//     }

//     public function InsertData(){
//         $con = $this->con();
//         $stmt = $con->prepare("INSERT INTO `users`(`f_name`, `m_name`, `l_name`, `gender`, `email`, `password`, `type`) VALUES (?, ?, ?, ?, ?, ?, ?)");
//         $true = $stmt->execute(array($this->f_name, $this->m_name, $this->l_name, $this->gender, $this->email, $this->passwordhash, $this->type));
//         if($true){
//             return "pasok";
//         }else {
//             return "hindi";
//         }
//     }

// }
// $password = "password";
// $passwordhash = password_hash($password, PASSWORD_BCRYPT);
// $create = new Create("admin", "admin", "admin", "male", "administrator", "lms.superadmin@gmail.com", $passwordhash);
// echo $create->InsertData();
