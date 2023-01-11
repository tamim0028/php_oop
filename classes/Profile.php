<?php
class Profile
{
    public $address;

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {   
        echo($this->address);
    }
}
$profile = new Profile();
$profile->setAddress("Dhaka");
$profile->getAddress();

?>