<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodeSpecBatchRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment for the instance. Valid values:
     *
     *   **true**: enables automatic payment. Make sure that your account balance is sufficient.
     *   **false**: disables automatic payment. You can perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner of the page, click **Expenses** to go to the **Billing Management** console. In the left-side navigation pane, click **Orders**. On the **Orders** page, find the order and complete the payment.
     *
     * Default value: **true**.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The business information.
     *
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The coupon code. Default value: **youhuiquan_promotion_option_id_for_blank**.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The ID of the instance whose configurations you want to change.
     *
     * @example dds-bp1337621e8f****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The time when the changed configurations take effect. Valid values:
     *
     *   **Immediately**: The configurations immediately take effect.
     *
     *   **MaintainTime**: The configurations take effect during the maintenance window of the instance.
     *
     * > *   You can call the [ModifyDBInstanceMaintainTime](~~62008~~) operation to modify the maintenance window of an instance.
     *   You can call the [DescribeDBInstanceAttribute](~~62010~~) operation to view the maintenance window of an instance.
     *
     * Default value: **Immediately**.
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The configuration information of the mongos nodes or shard nodes whose configurations you want to change. For more information, see [Instance types](~~57141~~).
     *
     * @example {"Shards":[{"DBInstanceClass":"dds.shard.mid","DBInstanceName":"d-bp14ae4572fd****","Storage":20},{"DBInstanceClass":"dds.shard.mid","DBInstanceName":"d-bp19f4f92dc5****","Storage":30}]}
     *
     * @var string
     */
    public $nodesInfo;

    /**
     * @description The type of configuration changes. Valid values:
     *
     *   **UPGRADE**
     *
     *   **DOWNGRADE**
     *
     * > This parameter can be configured only when the billing method of the instance is subscription.
     * @example UPGRADE
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
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'couponNo'             => 'CouponNo',
        'DBInstanceId'         => 'DBInstanceId',
        'effectiveTime'        => 'EffectiveTime',
        'nodesInfo'            => 'NodesInfo',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
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
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->nodesInfo) {
            $res['NodesInfo'] = $this->nodesInfo;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return ModifyNodeSpecBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['NodesInfo'])) {
            $model->nodesInfo = $map['NodesInfo'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
