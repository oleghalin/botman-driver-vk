<?php
namespace BotMan\BotMan\Drivers\Vkontakte;

use \BotMan\BotMan\Drivers\HttpDriver;
use BotMan\BotMan\Interfaces\DriverInterface;
use BotMan\BotMan\Interfaces\UserInterface;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VK\Client\VKApiClient;

/**
 * Class VkComDriver
 *
 * @package BotMan\BotMan\Drivers\Vkontakte
 */
class VkComDriver implements DriverInterface
{
    /**
     *
     */
    const DRIVER_NAME  = 'vk.com';

    /**
     * @var \VK\Client\VKApiClient
     */
    protected $client;

    /**
     * VkComDriver constructor.
     *
     * @param array $config
     */
    public function __construct(array  $config)
    {
        //
    }

    /**
     * @return bool|void
     */
    public function matchesRequest()
    {
        // TODO: Implement matchesRequest() method.
    }

    /**
     * @return array|void
     */
    public function getMessages()
    {
        // TODO: Implement getMessages() method.
    }

    /**
     * @return bool|void
     */
    public function isConfigured()
    {
        // TODO: Implement isConfigured() method.
    }

    /**
     * @param \BotMan\BotMan\Messages\Incoming\IncomingMessage $matchingMessage
     * @return \BotMan\BotMan\Interfaces\UserInterface|void
     */
    public function getUser(IncomingMessage $matchingMessage)
    {
        // TODO: Implement getUser() method.
    }

    /**
     * @param \BotMan\BotMan\Messages\Incoming\IncomingMessage $message
     * @return \BotMan\BotMan\Messages\Incoming\Answer|void
     */
    public function getConversationAnswer(IncomingMessage $message)
    {
        // TODO: Implement getConversationAnswer() method.
    }

    /**
     * @param \BotMan\BotMan\Messages\Outgoing\Question|string $message
     * @param \BotMan\BotMan\Messages\Incoming\IncomingMessage $matchingMessage
     * @param array $additionalParameters
     * @return \BotMan\BotMan\Interfaces\DriverInterface|void
     */
    public function buildServicePayload($message, $matchingMessage, $additionalParameters = [])
    {
        // TODO: Implement buildServicePayload() method.
    }

    /**
     * @param mixed $payload
     * @return \Symfony\Component\HttpFoundation\Response|void
     */
    public function sendPayload($payload)
    {
        // TODO: Implement sendPayload() method.
    }

    /**
     * @return string|void
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @return bool|mixed|void
     */
    public function hasMatchingEvent()
    {
        // TODO: Implement hasMatchingEvent() method.
    }

    /**
     * @param \BotMan\BotMan\Messages\Incoming\IncomingMessage $matchingMessage
     * @return mixed|void
     */
    public function types(IncomingMessage $matchingMessage)
    {
        // TODO: Implement types() method.
    }

    /**
     * @return bool|void
     */
    public function serializesCallbacks()
    {
        // TODO: Implement serializesCallbacks() method.
    }
}