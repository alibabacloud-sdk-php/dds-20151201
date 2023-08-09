<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description Indicates whether password-free access within the VPC is enabled. Valid values:
     *
     *   **Open**: Password-free access is enabled.
     *   **Close**: Password-free access is disabled, and you must use a password for access.
     *   **NotSupport**: Password-free access is not supported.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example api
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
