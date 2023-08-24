<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupRelationResponseBody;

use AlibabaCloud\Tea\Model;

class globalSecurityIPGroupRel extends Model
{
    /**
     * @example 27.16.214.10,111.60.117.181
     *
     * @var string
     */
    public $GIpList;

    /**
     * @example dev_baoxian_k8s_bj
     *
     * @var string
     */
    public $globalIgName;

    /**
     * @example g-gfurfpsh4ycbrm2avst7
     *
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'GIpList'               => 'GIpList',
        'globalIgName'          => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }
        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }
        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalSecurityIPGroupRel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }
        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }
        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}