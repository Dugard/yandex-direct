<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface as ContractEventDispatcher;

abstract class BaseTestCase extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $user;

    protected function setUp()
    {
        $this->dispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->user = $this->createMock(User::class);

        $this->configureUser($this->user);
    }

    protected function tearDown()
    {
        \PHPUnit_Extension_FunctionMocker::tearDown();

        unset($this->dispatcher, $this->client, $this->user);
    }

    protected function configureUser(\PHPUnit_Framework_MockObject_MockObject $user)
    {
        $user->method('getSoapOptions')->willReturn([]);
        $user->method('getInvoker')->willReturn(function (callable $callback) {
            return $callback();
        });
    }

    protected function createClient($soapClientClass, array $methods = [])
    {
        $options = [
            'uri' => 'localhost',
            'location' => 'localhost',
        ];

        $this->configureDispatcher();

        return $this->getMockBuilder($soapClientClass)
            ->setConstructorArgs([null, $this->dispatcher, $this->user, $options])
            ->setMethods($methods)
            ->getMockForAbstractClass();
    }

    protected function doInvoke(SoapClient $client, $method, array $params)
    {
        $reflection = new \ReflectionMethod($client, 'invoke');
        $reflection->setAccessible(true);

        return $reflection->invoke($client, $method, $params);
    }

    protected function configureDispatcher(array $eventsArgs = [])
    {
        $eventArgumentIndex = 1;

        if (interface_exists(ContractEventDispatcher::class)) {
            $eventsArgs = array_map('array_reverse', $eventsArgs);
            $eventArgumentIndex = 0;
        }

        if (count($eventsArgs) > 0) {
            $this->dispatcher->expects(self::exactly(count($eventsArgs)))
                ->method('dispatch')
                ->withConsecutive(...$eventsArgs)
                ->willReturnArgument($eventArgumentIndex);
        } else {
            $this->dispatcher->method('dispatch')->willReturnArgument($eventArgumentIndex);
        }
    }
}
