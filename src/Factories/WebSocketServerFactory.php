<?php

namespace HuangYi\Shadowfax\Factories;

use Swoole\WebSocket\Server;

class WebSocketServerFactory extends HttpServerFactory
{
    /**
     * Define the server class.
     *
     * @return string
     */
    public function server(): string
    {
        return Server::class;
    }

    /**
     * Get the events list.
     *
     * @return array
     */
    public function events(): array
    {
        return array_merge(parent::events(), [
            'open' => \HuangYi\Shadowfax\Events\OpenEvent::class,
            'message' => \HuangYi\Shadowfax\Events\MessageEvent::class,
            'close' => \HuangYi\Shadowfax\Events\CloseEvent::class,
        ]);
    }
}