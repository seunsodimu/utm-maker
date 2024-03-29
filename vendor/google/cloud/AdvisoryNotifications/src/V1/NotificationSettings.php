<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/advisorynotifications/v1/service.proto

namespace Google\Cloud\AdvisoryNotifications\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for each NotificationType.
 *
 * Generated from protobuf message <code>google.cloud.advisorynotifications.v1.NotificationSettings</code>
 */
class NotificationSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the associated NotificationType is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether the associated NotificationType is enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Advisorynotifications\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the associated NotificationType is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether the associated NotificationType is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}

