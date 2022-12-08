<?php

class User{
    //user details
    private $name;
    private $lastName;
    private $email;
    private int $id = 0;
    private $phone;
    private $pass;
    private $address;

   //add data
    public function setFullName($name, $lastName){
        $this->name = $name;
        $this->lastName = $lastName;

    }
    public function setContactData($phone, $address){
        $this->phone = $phone;
        $this->address = $address;

    }
    public function setUserLogin($user, $pass){
        $this->email = $user;
        $this->pass = $pass;
        $this->id = +1;

    }
    public function emptyData(){
        unset($this->email);
        unset($this->name);
        unset($this->lastName);
        unset($this->id);
        unset($this->phone);
        unset($this->pass);
        unset($this->address);
    }

   //get details
    public function getFullName(){
        $fullName = $this->name.' '.$this->lastName;
        return $fullName;
    }

    public function getContactData(){
        $contact = 'Telefono: '.$this->phone.' Direccion: '.$this->address;
        return $contact;
    }

    public function getUserLogin(){
        if(isset($this->id)){
        $completeData =  $this->email .' '.  $this->pass;

        return $completeData;
        }else{
            return $res = 'sin datos';
        }

    }
}
