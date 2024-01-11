<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3\PageInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents form information.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.PageInfo.FormInfo</code>
 */
class FormInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * parameters contained in the form. Note that the webhook cannot add or
     * remove any form parameter.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo parameter_info = 2;</code>
     */
    private $parameter_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo\ParameterInfo>|\Google\Protobuf\Internal\RepeatedField $parameter_info
     *           Optional for both
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     *           parameters contained in the form. Note that the webhook cannot add or
     *           remove any form parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * parameters contained in the form. Note that the webhook cannot add or
     * remove any form parameter.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo parameter_info = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameterInfo()
    {
        return $this->parameter_info;
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * parameters contained in the form. Note that the webhook cannot add or
     * remove any form parameter.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo parameter_info = 2;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo\ParameterInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameterInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo\ParameterInfo::class);
        $this->parameter_info = $arr;

        return $this;
    }

}


