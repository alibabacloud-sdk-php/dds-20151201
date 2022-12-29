<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons\coupon\promotionRuleIdList;
use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @var string
     */
    public $activityCategory;

    /**
     * @description The coupon number.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The description of the topic.
     *
     * @example ceshi
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the coupon was selected.
     *
     * @example true
     *
     * @var string
     */
    public $isSelected;

    /**
     * @description The name of the coupon.
     *
     * @example youhuiquan111
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var string
     */
    public $promotionOptionCode;

    /**
     * @var promotionRuleIdList
     */
    public $promotionRuleIdList;
    protected $_name = [
        'activityCategory'    => 'ActivityCategory',
        'couponNo'            => 'CouponNo',
        'description'         => 'Description',
        'isSelected'          => 'IsSelected',
        'name'                => 'Name',
        'optionCode'          => 'OptionCode',
        'promotionOptionCode' => 'PromotionOptionCode',
        'promotionRuleIdList' => 'PromotionRuleIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityCategory) {
            $res['ActivityCategory'] = $this->activityCategory;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }
        if (null !== $this->promotionRuleIdList) {
            $res['PromotionRuleIdList'] = null !== $this->promotionRuleIdList ? $this->promotionRuleIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityCategory'])) {
            $model->activityCategory = $map['ActivityCategory'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['PromotionOptionCode'])) {
            $model->promotionOptionCode = $map['PromotionOptionCode'];
        }
        if (isset($map['PromotionRuleIdList'])) {
            $model->promotionRuleIdList = promotionRuleIdList::fromMap($map['PromotionRuleIdList']);
        }

        return $model;
    }
}
