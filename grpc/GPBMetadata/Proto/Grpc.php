<?php

declare(strict_types=1);
# source: proto/grpc.proto

namespace GPBMetadata\Proto;

use Google\Protobuf\Internal\DescriptorPool;

class Grpc
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/grpc.protogrpc"#
HiUser
name (	
sex ("6
HiReply
message (	
user (2.grpc.HiUser2/
Hi)
SayHello.grpc.HiUser.grpc.HiReply" bproto3',
            true
        );

        static::$is_initialized = true;
    }
}
