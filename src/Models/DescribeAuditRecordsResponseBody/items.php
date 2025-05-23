<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody\items\SQLRecord;

class items extends Model
{
    /**
     * @var SQLRecord[]
     */
    public $SQLRecord;
    protected $_name = [
        'SQLRecord' => 'SQLRecord',
    ];

    public function validate()
    {
        if (\is_array($this->SQLRecord)) {
            Model::validateArray($this->SQLRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLRecord) {
            if (\is_array($this->SQLRecord)) {
                $res['SQLRecord'] = [];
                $n1 = 0;
                foreach ($this->SQLRecord as $item1) {
                    $res['SQLRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['SQLRecord'])) {
            if (!empty($map['SQLRecord'])) {
                $model->SQLRecord = [];
                $n1 = 0;
                foreach ($map['SQLRecord'] as $item1) {
                    $model->SQLRecord[$n1++] = SQLRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
