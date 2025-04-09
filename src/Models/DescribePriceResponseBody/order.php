<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\depreciateInfo;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\ruleIds;

class order extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $contractActivity;

    /**
     * @var coupons
     */
    public $coupons;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $optionalPromotions;

    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $promDetailList;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var bool
     */
    public $showDiscountInfo;

    /**
     * @var float
     */
    public $standDiscountPrice;

    /**
     * @var float
     */
    public $standPrice;

    /**
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'code' => 'Code',
        'contractActivity' => 'ContractActivity',
        'coupons' => 'Coupons',
        'currency' => 'Currency',
        'depreciateInfo' => 'DepreciateInfo',
        'discountAmount' => 'DiscountAmount',
        'isContractActivity' => 'IsContractActivity',
        'message' => 'Message',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount' => 'OriginalAmount',
        'promDetailList' => 'PromDetailList',
        'ruleIds' => 'RuleIds',
        'showDiscountInfo' => 'ShowDiscountInfo',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice' => 'StandPrice',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (null !== $this->coupons) {
            $this->coupons->validate();
        }
        if (null !== $this->depreciateInfo) {
            $this->depreciateInfo->validate();
        }
        if (null !== $this->ruleIds) {
            $this->ruleIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = $this->contractActivity;
        }

        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toArray($noStream) : $this->coupons;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toArray($noStream) : $this->depreciateInfo;
        }

        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->optionalPromotions) {
            $res['OptionalPromotions'] = $this->optionalPromotions;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->promDetailList) {
            $res['PromDetailList'] = $this->promDetailList;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toArray($noStream) : $this->ruleIds;
        }

        if (null !== $this->showDiscountInfo) {
            $res['ShowDiscountInfo'] = $this->showDiscountInfo;
        }

        if (null !== $this->standDiscountPrice) {
            $res['StandDiscountPrice'] = $this->standDiscountPrice;
        }

        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ContractActivity'])) {
            $model->contractActivity = $map['ContractActivity'];
        }

        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DepreciateInfo'])) {
            $model->depreciateInfo = depreciateInfo::fromMap($map['DepreciateInfo']);
        }

        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }

        if (isset($map['IsContractActivity'])) {
            $model->isContractActivity = $map['IsContractActivity'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OptionalPromotions'])) {
            $model->optionalPromotions = $map['OptionalPromotions'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['PromDetailList'])) {
            $model->promDetailList = $map['PromDetailList'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }

        if (isset($map['ShowDiscountInfo'])) {
            $model->showDiscountInfo = $map['ShowDiscountInfo'];
        }

        if (isset($map['StandDiscountPrice'])) {
            $model->standDiscountPrice = $map['StandDiscountPrice'];
        }

        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
