<?php

class User 
{
    public $name; 
    public $email;
    public $phone;
    public $profile = [];

    public function setName($nam)
    {
        $this->name = $nam;
    }

    public function setEmail($ema)
    {
        $this->name = $ema;
    }

    public function getName()
    {
        echo ($this->name);
    }
    
    public function getEmail()
    {
       echo($this->email);
    }

    public function setPhone($phn)
    {
        $this->phone =$phn;

    }

    public function getPhone()
    {
        echo($this->phone);
    }

    public function setProfile($add, $img)
    {
        $this->profile['address'] = $add;
        $this->profile['img'] = $img;
    }

    public function getProfile()
    {
        // $this->profile['address'] = $this->address;
        // $this->profile['img'] = $this->img;
        
        echo('Addreess :' .$this->profile['address'].' Image: '.$this->profile['img']);
    }

}

$user = new User;
$user->setName('Alauddin');
$user->getName();

$user->email = 'email@gmail.com';
$user->getEmail();

$user->setPhone('01700000000');
$user->getPhone();

$user->setProfile('Mathbaria', 'img.png');
$user->getProfile();


?>