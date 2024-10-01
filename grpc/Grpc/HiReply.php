<?php

declare(strict_types=1);
# source: proto/grpc.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Proto\Grpc;

/**
 * Generated from protobuf message <code>grpc.HiReply</code>.
 */
class HiReply extends Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     */
    protected $message = '';

    /**
     * Generated from protobuf field <code>.grpc.HiUser user = 2;</code>.
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     * @var string $message
     * @var HiUser $user
     *             }
     */
    public function __construct($data = null)
    {
        Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, true);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grpc.HiUser user = 2;</code>.
     * @return null|HiUser
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.grpc.HiUser user = 2;</code>.
     * @param HiUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, HiUser::class);
        $this->user = $var;

        return $this;
    }
}
