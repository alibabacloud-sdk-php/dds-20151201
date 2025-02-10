<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeAuditPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $logAuditStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logAuditStatus' => 'LogAuditStatus',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logAuditStatus) {
            $res['LogAuditStatus'] = $this->logAuditStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogAuditStatus'])) {
            $model->logAuditStatus = $map['LogAuditStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
