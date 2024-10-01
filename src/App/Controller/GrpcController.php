<?php

declare(strict_types=1);

namespace App\Controller;

use App\Grpc\HiClient;
use Grpc\HiReply;
use Grpc\HiUser;

class GrpcController extends AbstractController
{
    public function hello()
    {
        // This client is coroutine-safe and can be reused
        $client = new HiClient('127.0.0.1:9503', [
            'credentials' => null,
        ]);

        $request = new HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        /**
         * @var HiReply $reply
         */
        [$reply, $status] = $client->sayHello($request);

        $message = $reply->getMessage();
        $user = $reply->getUser();

        var_dump($message);
        var_dump($user->getName());
        var_dump($user->getSex());
        var_dump(memory_get_usage(true));
        return $message;
    }
}
