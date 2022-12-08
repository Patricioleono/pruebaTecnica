<?php

namespace patricioleono\test\UserTest;

use PHPUnit\Framework\TestCase;
use User;
use UserRepository;


final class UserTest extends TestCase
{
    public function testFullName()
    {
        require 'src/users.php';

        $user = new User();
        $user->setFullName('Patricio', 'Leon');

        $this->assertIsString('Patricio Leon', $user->getFullName());
        $this->assertEquals('Patricio Leon','Patricio Leon',$user->getFullName());

    }

    public function testContactData()
    {
        $contact = new User();
        $contact->setContactData(937213792, 'Chile Chico');

        $this->assertIsString('Chile Chico', $contact->getContactData());
        $this->assertIsInt(937213792, $contact->getContactData());
    }

    public function testLogin(){
        $login = new User();
        $login->setUserLogin('patricio.lyono@gmail.com','C@ntratado');

        $this->assertIsString(' ', $login->getUserLogin());
        $this->assertEquals('patricio.lyono@gmail.com C@ntratado', $login->getUserLogin());

    }

    public function testId(): void{
        require  'src/UserRepository.php';
        $idFail = new UserRepository();

        $this->expectException(UserRepository::class);
        $idFail->getByIdOrFail(new id());
    }

}