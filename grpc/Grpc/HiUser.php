<?php

declare(strict_types=1);
# source: proto/grpc.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Proto\Grpc;

/**
 * Generated from protobuf message <code>grpc.HiUser</code>.
 */
class HiUser extends Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     */
    protected $name = '';

    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>.
     */
    protected $sex = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     * @var string $name
     * @var int $sex
     *          }
     */
    public function __construct($data = null)
    {
        Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>.
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>.
     * @param int $var
     * @return $this
     */
    public function setSex($var)
    {
        GPBUtil::checkInt32($var);
        $this->sex = $var;

        return $this;
    }
}
