# guzzle-mock
Test utilities for working with guzzle mock handler in tests

## Installation

```bash
composer require --dev myparcelcom/guzzle-mock
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
