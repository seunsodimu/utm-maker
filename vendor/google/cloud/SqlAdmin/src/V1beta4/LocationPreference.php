<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preferred location. This specifies where a Cloud SQL instance is located.
 * Note that if the preferred location is not available, the instance will be
 * located as close as possible within the region. Only one location may be
 * specified.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.LocationPreference</code>
 */
class LocationPreference extends \Google\Protobuf\Internal\Message
{
    /**
     * The App Engine application to follow, it must be in the same region as the
     * Cloud SQL instance. WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string follow_gae_application = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $follow_gae_application = '';
    /**
     * The preferred Compute Engine zone (for example: us-central1-a,
     * us-central1-b, etc.). WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The preferred Compute Engine zone for the secondary/failover
     * (for example: us-central1-a, us-central1-b, etc.).
     * To disable this field, set it to 'no_secondary_zone'.
     *
     * Generated from protobuf field <code>string secondary_zone = 4;</code>
     */
    private $secondary_zone = '';
    /**
     * This is always `sql#locationPreference`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    private $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $follow_gae_application
     *           The App Engine application to follow, it must be in the same region as the
     *           Cloud SQL instance. WARNING: Changing this might restart the instance.
     *     @type string $zone
     *           The preferred Compute Engine zone (for example: us-central1-a,
     *           us-central1-b, etc.). WARNING: Changing this might restart the instance.
     *     @type string $secondary_zone
     *           The preferred Compute Engine zone for the secondary/failover
     *           (for example: us-central1-a, us-central1-b, etc.).
     *           To disable this field, set it to 'no_secondary_zone'.
     *     @type string $kind
     *           This is always `sql#locationPreference`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The App Engine application to follow, it must be in the same region as the
     * Cloud SQL instance. WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string follow_gae_application = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getFollowGaeApplication()
    {
        @trigger_error('follow_gae_application is deprecated.', E_USER_DEPRECATED);
        return $this->follow_gae_application;
    }

    /**
     * The App Engine application to follow, it must be in the same region as the
     * Cloud SQL instance. WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string follow_gae_application = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setFollowGaeApplication($var)
    {
        @trigger_error('follow_gae_application is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->follow_gae_application = $var;

        return $this;
    }

    /**
     * The preferred Compute Engine zone (for example: us-central1-a,
     * us-central1-b, etc.). WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The preferred Compute Engine zone (for example: us-central1-a,
     * us-central1-b, etc.). WARNING: Changing this might restart the instance.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The preferred Compute Engine zone for the secondary/failover
     * (for example: us-central1-a, us-central1-b, etc.).
     * To disable this field, set it to 'no_secondary_zone'.
     *
     * Generated from protobuf field <code>string secondary_zone = 4;</code>
     * @return string
     */
    public function getSecondaryZone()
    {
        return $this->secondary_zone;
    }

    /**
     * The preferred Compute Engine zone for the secondary/failover
     * (for example: us-central1-a, us-central1-b, etc.).
     * To disable this field, set it to 'no_secondary_zone'.
     *
     * Generated from protobuf field <code>string secondary_zone = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_zone = $var;

        return $this;
    }

    /**
     * This is always `sql#locationPreference`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#locationPreference`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

