<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies transfer eligibility of a SKU.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.TransferEligibility</code>
 */
class TransferEligibility extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether reseller is eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     */
    private $is_eligible = false;
    /**
     * Localized description if reseller is not eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Specified the reason for ineligibility.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility.Reason ineligibility_reason = 3;</code>
     */
    private $ineligibility_reason = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_eligible
     *           Whether reseller is eligible to transfer the SKU.
     *     @type string $description
     *           Localized description if reseller is not eligible to transfer the SKU.
     *     @type int $ineligibility_reason
     *           Specified the reason for ineligibility.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether reseller is eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->is_eligible;
    }

    /**
     * Whether reseller is eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEligible($var)
    {
        GPBUtil::checkBool($var);
        $this->is_eligible = $var;

        return $this;
    }

    /**
     * Localized description if reseller is not eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Localized description if reseller is not eligible to transfer the SKU.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Specified the reason for ineligibility.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility.Reason ineligibility_reason = 3;</code>
     * @return int
     */
    public function getIneligibilityReason()
    {
        return $this->ineligibility_reason;
    }

    /**
     * Specified the reason for ineligibility.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility.Reason ineligibility_reason = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIneligibilityReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\TransferEligibility\Reason::class);
        $this->ineligibility_reason = $var;

        return $this;
    }

}

