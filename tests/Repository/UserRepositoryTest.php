<?php

namespace Repository;

use PHPUnit_Framework_TestCase;
use Cnastasi\HD2F\Repository\UserRepository;
use Cnastasi\HD2F\Repository\InMemoryUserRepository;
use Cnastasi\HD2F\Factory\StaticUserModelFactory;

class UserRepositoryTest extends PHPUnit_Framework_TestCase
{
    private UserRepository   $userRepository;
    private UserModelFactory $userModelFactory;

    public function setUp () {
        parent::setUp();

        $this->userRepository   = new InMemoryUserRepository();
        $this->userModelFactory = new StaticUserModelFactory();
    }
    
    
    public function testRepository() {
        $user = $this->userModelFactory->create();

        $this->userRepository->save($user);

        print_r($this->userRepository->all());
    } 
}
