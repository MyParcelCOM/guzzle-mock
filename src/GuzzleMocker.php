<?php

declare(strict_types=1);

namespace MyParcelCom\GuzzleMock;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;

trait GuzzleMocker
{
    private function mockGuzzle(array &$requestHistoryContainer, Response ...$responses): Client
    {
        $history = Middleware::history($requestHistoryContainer);
        $handlerStack = HandlerStack::create(new MockHandler($responses));

        $handlerStack->push($history);

        return new Client(['handler' => $handlerStack]);
    }
}
