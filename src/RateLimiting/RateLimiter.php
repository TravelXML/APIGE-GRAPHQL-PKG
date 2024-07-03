<?php
namespace Apige\GraphQLMySQLAPI\RateLimiting;

use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\RateLimiter\Storage\InMemoryStorage;

class RateLimiter {
    private $limiter;

    public function __construct() {
        $storage = new InMemoryStorage();
        $this->limiter = new RateLimiterFactory([
            'id' => 'api_limit',
            'policy' => 'token_bucket',
            'limit' => 100,
            'rate' => ['interval' => '1 minute', 'amount' => 100]
        ], $storage);
    }

    public function consume() {
        return $this->limiter->create('api_consumer')->consume();
    }
}


?>