# guzzle-mock
Test utilities for working with guzzle mock handler in tests

## Installation

```bash
composer require --dev myparcelcom/guzzle-mock
```

## PHP 7/8
The minimum PHP version is `7.4`. To update dependencies on a system without PHP 7 or 8 use:
```shell
docker run --rm --mount type=bind,source="$(pwd)",target=/app composer:2 composer update --ignore-platform-reqs
```

## Usage

```php
use MyParcelCom\GuzzleMock\GuzzleMock;
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    use GuzzleMock;
    
    public function testSomething()
    {
        $response1 = new Response();
        $response2 = new Response();
        
        $requests = [];
        $client = $this->mockGuzzle($requests, $response1, $response2);
        
        // Make requests using the $client
        
        $request1 = $requests[0]['request']; // instanceof GuzzleHttp\Psr7\Request
    }
}
```
