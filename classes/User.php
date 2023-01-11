<?php
// Include class definition
require "Profile.php";

class User extends Profile
{
    public $name; 
    public $email;
    public $phone;
    
    // public function __construct()
    // {

    // }

    //set function

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone =$phone;
    }
    
    public function getName()
    {
        echo($this->name);
    }

    // get function
    
    public function getEmail()
    {
       echo($this->email);
    }

    public function getPhone()
    {
        echo($this->phone);
    }


}

$xyz = new User;
$xyz->setAddress('Dhaka');
$xyz->getAddress();


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $user = new User;
//     $user->setName($_POST['name']);
//     $user->getName();

//     $user->setEmail($_POST['email']);
//     $user->getEmail();
//     $user->setPhone($_POST['phone']);
//     $user->getPhone();
//     $user->setAddress($_POST['address']);
//     $user->getAddress();
//     $user->setImage($_POST['image']);
//     $user->getImage();
// }
?>