<?php

declare(strict_types=1);

namespace App\Controller;

use DateInterval;
use Psr\SimpleCache\CacheInterface;

class IndexController extends AbstractController
{
    public function __construct(private CacheInterface $cache)
    {
    }

    public function index()
    {
        $counterCacheKey = 'test.counter';
        $counter = $this->cache->get($counterCacheKey, 0);
        $this->cache->set($counterCacheKey, ++$counter, new DateInterval('PT5S'));
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}. You are user number: {$counter}",
        ];
    }
}
