<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Safety settings.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SafetySetting</code>
 */
class SafetySetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Harm category.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HarmCategory category = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $category = 0;
    /**
     * Required. The harm block threshold.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SafetySetting.HarmBlockThreshold threshold = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $threshold = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $category
     *           Required. Harm category.
     *     @type int $threshold
     *           Required. The harm block threshold.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Harm category.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HarmCategory category = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Required. Harm category.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HarmCategory category = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\HarmCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Required. The harm block threshold.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SafetySetting.HarmBlockThreshold threshold = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * Required. The harm block threshold.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SafetySetting.HarmBlockThreshold threshold = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\SafetySetting\HarmBlockThreshold::class);
        $this->threshold = $var;

        return $this;
    }

}

