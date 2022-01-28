<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $databaseNames;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicationFactor;

    /**
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
    public $restoreTime;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @var string
     */
    public $storageEngine;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountPassword'       => 'AccountPassword',
        'autoRenew'             => 'AutoRenew',
        'backupId'              => 'BackupId',
        'businessInfo'          => 'BusinessInfo',
        'chargeType'            => 'ChargeType',
        'clientToken'           => 'ClientToken',
        'clusterId'             => 'ClusterId',
        'couponNo'              => 'CouponNo',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'databaseNames'         => 'DatabaseNames',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'hiddenZoneId'          => 'HiddenZoneId',
        'networkType'           => 'NetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'period'                => 'Period',
        'readonlyReplicas'      => 'ReadonlyReplicas',
        'regionId'              => 'RegionId',
        'replicationFactor'     => 'ReplicationFactor',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'restoreTime'           => 'RestoreTime',
        'secondaryZoneId'       => 'SecondaryZoneId',
        'securityIPList'        => 'SecurityIPList',
        'securityToken'         => 'SecurityToken',
        'srcDBInstanceId'       => 'SrcDBInstanceId',
        'storageEngine'         => 'StorageEngine',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }
        if (null !== $this->storageEngine) {
            $res['StorageEngine'] = $this->storageEngine;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
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
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }
        if (isset($map['StorageEngine'])) {
            $model->storageEngine = $map['StorageEngine'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
