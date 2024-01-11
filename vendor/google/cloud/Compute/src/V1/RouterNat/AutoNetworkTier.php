<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterNat;

use UnexpectedValueException;

/**
 * The network tier to use when automatically reserving NAT IP addresses. Must be one of: PREMIUM, STANDARD. If not specified, then the current project-level default tier is used.
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterNat.AutoNetworkTier</code>
 */
class AutoNetworkTier
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_AUTO_NETWORK_TIER = 0;</code>
     */
    const UNDEFINED_AUTO_NETWORK_TIER = 0;
    /**
     * Public internet quality with fixed bandwidth.
     *
     * Generated from protobuf enum <code>FIXED_STANDARD = 310464328;</code>
     */
    const FIXED_STANDARD = 310464328;
    /**
     * High quality, Google-grade network tier, support for all networking products.
     *
     * Generated from protobuf enum <code>PREMIUM = 399530551;</code>
     */
    const PREMIUM = 399530551;
    /**
     * Public internet quality, only limited support for other networking products.
     *
     * Generated from protobuf enum <code>STANDARD = 484642493;</code>
     */
    const STANDARD = 484642493;
    /**
     * (Output only) Temporary tier for FIXED_STANDARD when fixed standard tier is expired or not configured.
     *
     * Generated from protobuf enum <code>STANDARD_OVERRIDES_FIXED_STANDARD = 465847234;</code>
     */
    const STANDARD_OVERRIDES_FIXED_STANDARD = 465847234;

    private static $valueToName = [
        self::UNDEFINED_AUTO_NETWORK_TIER => 'UNDEFINED_AUTO_NETWORK_TIER',
        self::FIXED_STANDARD => 'FIXED_STANDARD',
        self::PREMIUM => 'PREMIUM',
        self::STANDARD => 'STANDARD',
        self::STANDARD_OVERRIDES_FIXED_STANDARD => 'STANDARD_OVERRIDES_FIXED_STANDARD',
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


