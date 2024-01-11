<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\Vehicle;

use UnexpectedValueException;

/**
 * Policy on how a vehicle can be unloaded. Applies only to shipments having
 * both a pickup and a delivery.
 * Other shipments are free to occur anywhere on the route independent of
 * `unloading_policy`.
 *
 * Protobuf type <code>google.cloud.optimization.v1.Vehicle.UnloadingPolicy</code>
 */
class UnloadingPolicy
{
    /**
     * Unspecified unloading policy; deliveries must just occur after their
     * corresponding pickups.
     *
     * Generated from protobuf enum <code>UNLOADING_POLICY_UNSPECIFIED = 0;</code>
     */
    const UNLOADING_POLICY_UNSPECIFIED = 0;
    /**
     * Deliveries must occur in reverse order of pickups
     *
     * Generated from protobuf enum <code>LAST_IN_FIRST_OUT = 1;</code>
     */
    const LAST_IN_FIRST_OUT = 1;
    /**
     * Deliveries must occur in the same order as pickups
     *
     * Generated from protobuf enum <code>FIRST_IN_FIRST_OUT = 2;</code>
     */
    const FIRST_IN_FIRST_OUT = 2;

    private static $valueToName = [
        self::UNLOADING_POLICY_UNSPECIFIED => 'UNLOADING_POLICY_UNSPECIFIED',
        self::LAST_IN_FIRST_OUT => 'LAST_IN_FIRST_OUT',
        self::FIRST_IN_FIRST_OUT => 'FIRST_IN_FIRST_OUT',
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


