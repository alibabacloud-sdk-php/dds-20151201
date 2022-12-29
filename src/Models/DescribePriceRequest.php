<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description The business information. This is an additional parameter.
     *
     * @example {"AccountPassword":"Pw123456","DBInstanceDescription":"test"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The code of the cluster. Valid values:
     *
     *   dds: a replica set instance that uses the pay-as-you-go billing method
     *   badds: a replica set instance that uses the subscription billing method
     *   dds_sharding: a sharded cluster instance that uses the pay-as-you-go billing method
     *   badds_sharding: a sharded cluster instance that uses the subscription billing method
     *   badds_sharding_intl: a sharded cluster instance that uses the subscription billing method and is available on the International site (alibabacloud.com)
     *   badds_sharding_jp: a sharded cluster instance that uses the subscription billing method and is available on the Japan site (jp.alibabacloud.com)
     *
     * @example badds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The coupon code. Default value: **youhuiquan_promotion_option_id_for_blank**.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description A JSON string that contains the details of the ApsaraDB for MongoDB instance. For more information, see Details of the [DBInstances](~~197291~~) parameter in the DescribePrice operation.
     *
     * @example [ { "DBInstanceId":"dds-bp1b6e54e7cc****", "RegionId":"cn-hangzhou", "ZoneId":"cn-hangzhou-h", "Engine":"MongoDB", "EngineVersion":" 5.0", "DBInstanceClass":"mdb.shard.2x.xlarge.d", "DBInstanceStorage":30, "ChargeType":"PrePaid", "Period":1, "StorageType":"cloud_essd1" } ]
     *
     * @var string
     */
    public $DBInstances;

    /**
     * @description Specifies whether to return the parameters about the order. Valid values:
     *
     *   false
     *   true
     *
     * Default value: **false**.
     * @example true
     *
     * @var string
     */
    public $orderParamOut;

    /**
     * @description The type of the order. Valid values:
     *
     *   BUY: instance creation
     *   UPGRADE: instance configuration change
     *   RENEW: instance renewal
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service to which the instance belongs. Default value: **dds**.
     *
     * @example dds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. For more information, see [View basic information of a resource group](~~151181~~).
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'businessInfo'         => 'BusinessInfo',
        'commodityCode'        => 'CommodityCode',
        'couponNo'             => 'CouponNo',
        'DBInstances'          => 'DBInstances',
        'orderParamOut'        => 'OrderParamOut',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'productCode'          => 'ProductCode',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = $this->DBInstances;
        }
        if (null !== $this->orderParamOut) {
            $res['OrderParamOut'] = $this->orderParamOut;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DBInstances'])) {
            $model->DBInstances = $map['DBInstances'];
        }
        if (isset($map['OrderParamOut'])) {
            $model->orderParamOut = $map['OrderParamOut'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
