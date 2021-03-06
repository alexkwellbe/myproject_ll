<?php

namespace Core\Base\Bootstrap;

use Core\Base\Application;
use Predis\Client as Redis;

class RegisterRedis implements BootstrapperInterface
{
    /**
     * @param \Core\Base\Application $app
     */
    public function bootstrap(Application $app): void
    {
        $app->singleton(Redis::class, function() use ($app) {
            return new Redis($app['config']->get('redis'));
        });
    }
}