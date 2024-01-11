<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to handle the startup of instances during cluster create and
 * update process.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.StartupConfig</code>
 */
class StartupConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The config setting to enable cluster creation/ updation to be
     * successful only after required_registration_fraction of instances are up
     * and running. This configuration is applicable to only secondary workers for
     * now. The cluster will fail if required_registration_fraction of instances
     * are not available. This will include instance creation, agent registration,
     * and service registration (if enabled).
     *
     * Generated from protobuf field <code>optional double required_registration_fraction = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $required_registration_fraction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $required_registration_fraction
     *           Optional. The config setting to enable cluster creation/ updation to be
     *           successful only after required_registration_fraction of instances are up
     *           and running. This configuration is applicable to only secondary workers for
     *           now. The cluster will fail if required_registration_fraction of instances
     *           are not available. This will include instance creation, agent registration,
     *           and service registration (if enabled).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The config setting to enable cluster creation/ updation to be
     * successful only after required_registration_fraction of instances are up
     * and running. This configuration is applicable to only secondary workers for
     * now. The cluster will fail if required_registration_fraction of instances
     * are not available. This will include instance creation, agent registration,
     * and service registration (if enabled).
     *
     * Generated from protobuf field <code>optional double required_registration_fraction = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getRequiredRegistrationFraction()
    {
        return isset($this->required_registration_fraction) ? $this->required_registration_fraction : 0.0;
    }

    public function hasRequiredRegistrationFraction()
    {
        return isset($this->required_registration_fraction);
    }

    public function clearRequiredRegistrationFraction()
    {
        unset($this->required_registration_fraction);
    }

    /**
     * Optional. The config setting to enable cluster creation/ updation to be
     * successful only after required_registration_fraction of instances are up
     * and running. This configuration is applicable to only secondary workers for
     * now. The cluster will fail if required_registration_fraction of instances
     * are not available. This will include instance creation, agent registration,
     * and service registration (if enabled).
     *
     * Generated from protobuf field <code>optional double required_registration_fraction = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setRequiredRegistrationFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->required_registration_fraction = $var;

        return $this;
    }

}

