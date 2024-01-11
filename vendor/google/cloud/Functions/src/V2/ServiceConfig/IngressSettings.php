<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2\ServiceConfig;

use UnexpectedValueException;

/**
 * Available ingress settings.
 * This controls what traffic can reach the function.
 * If unspecified, ALLOW_ALL will be used.
 *
 * Protobuf type <code>google.cloud.functions.v2.ServiceConfig.IngressSettings</code>
 */
class IngressSettings
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>INGRESS_SETTINGS_UNSPECIFIED = 0;</code>
     */
    const INGRESS_SETTINGS_UNSPECIFIED = 0;
    /**
     * Allow HTTP traffic from public and private sources.
     *
     * Generated from protobuf enum <code>ALLOW_ALL = 1;</code>
     */
    const ALLOW_ALL = 1;
    /**
     * Allow HTTP traffic from only private VPC sources.
     *
     * Generated from protobuf enum <code>ALLOW_INTERNAL_ONLY = 2;</code>
     */
    const ALLOW_INTERNAL_ONLY = 2;
    /**
     * Allow HTTP traffic from private VPC sources and through GCLB.
     *
     * Generated from protobuf enum <code>ALLOW_INTERNAL_AND_GCLB = 3;</code>
     */
    const ALLOW_INTERNAL_AND_GCLB = 3;

    private static $valueToName = [
        self::INGRESS_SETTINGS_UNSPECIFIED => 'INGRESS_SETTINGS_UNSPECIFIED',
        self::ALLOW_ALL => 'ALLOW_ALL',
        self::ALLOW_INTERNAL_ONLY => 'ALLOW_INTERNAL_ONLY',
        self::ALLOW_INTERNAL_AND_GCLB => 'ALLOW_INTERNAL_AND_GCLB',
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


