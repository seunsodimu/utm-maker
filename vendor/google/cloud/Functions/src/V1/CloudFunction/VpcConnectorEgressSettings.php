<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1\CloudFunction;

use UnexpectedValueException;

/**
 * Available egress settings.
 * This controls what traffic is diverted through the Serverless VPC Access
 * connector resource. By default, PRIVATE_RANGES_ONLY is used.
 *
 * Protobuf type <code>google.cloud.functions.v1.CloudFunction.VpcConnectorEgressSettings</code>
 */
class VpcConnectorEgressSettings
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>VPC_CONNECTOR_EGRESS_SETTINGS_UNSPECIFIED = 0;</code>
     */
    const VPC_CONNECTOR_EGRESS_SETTINGS_UNSPECIFIED = 0;
    /**
     * Use the Serverless VPC Access connector only for private IP space from
     * RFC1918.
     *
     * Generated from protobuf enum <code>PRIVATE_RANGES_ONLY = 1;</code>
     */
    const PRIVATE_RANGES_ONLY = 1;
    /**
     * Force the use of Serverless VPC Access connector for all egress traffic
     * from the function.
     *
     * Generated from protobuf enum <code>ALL_TRAFFIC = 2;</code>
     */
    const ALL_TRAFFIC = 2;

    private static $valueToName = [
        self::VPC_CONNECTOR_EGRESS_SETTINGS_UNSPECIFIED => 'VPC_CONNECTOR_EGRESS_SETTINGS_UNSPECIFIED',
        self::PRIVATE_RANGES_ONLY => 'PRIVATE_RANGES_ONLY',
        self::ALL_TRAFFIC => 'ALL_TRAFFIC',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


