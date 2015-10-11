<?php

namespace Factory;

use PHPUnit_Framework_TestCase;
use Mockery;
use Mockery\Mock;
use Mockery\MockeryInterface;
use HD2F\Core\Factory\ContainerAwareFactory;
use HD2F\Core\Helper\DependencyInjectionContainer;
use HD2F\User\Model\UserModel;


class ContainerAwareFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \RuntimeException
     */
    public function shoulRaiseException() {
        $class     = 'unregisterd service';
        $container = $this->mockContainer();

        $container->shouldReceive('get')->with($class)->andReturn(null);

        $factory = new ContainerAwareFactory($container, $class);

        $model = $factory->create();

        static::assertNull($model);
    }

     /**
     * @test
     */
    public function shouldGetTheService() {
        $class     = 'unregisterd service';
        $container = $this->mockContainer();
        $instance  = $this->mockInstance();

        $container->shouldReceive('get')->with($class)->andReturn($instance);

        $factory = new ContainerAwareFactory($container, $class);

        $model = $factory->create();

        static::assertNotNull($model);
        static::assertEquals($instance, $model);
    }

    private function mockContainer () {
        return Mockery::mock(DependencyInjectionContainer::class);
    } 

    private function mockInstance () {
        return Mockery::mock(UserModel::class);
    }
}
