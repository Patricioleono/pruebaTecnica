<?php
require_once ('users.php');

class UserRepository extends User {

    public function createRepo(string $name, string $lastName, $email, int $phone, $pass, string $address){
        $crearUserRepo = new User();
        $crearUserRepo->setFullName($name, $lastName);
        $crearUserRepo->setContactData($phone, $address);
        $crearUserRepo->setUserLogin($email, $pass);
    }

    public function deletedRepo($id){
        $data = $this->getUserLogin($id);
        if($data['id'] == $id){
            $this->emptyData();
        }else{
            return $res = 'no existen datos';
        }

    }

    public function updateRepo(int $id, string $name, string $lastName, $email, int $phone, $pass, string $address){
        $this->deletedRepo($id);
        $this->createRepo($name, $lastName, $email, $phone, $pass, $address);
    }

    public function getByIdOrFail(){

        $data = $this->getUserLogin();
    }


}
