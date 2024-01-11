<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\ServiceLevelObjective;

use UnexpectedValueException;

/**
 * `ServiceLevelObjective.View` determines what form of
 * `ServiceLevelObjective` is returned from `GetServiceLevelObjective`,
 * `ListServiceLevelObjectives`, and `ListServiceLevelObjectiveVersions` RPCs.
 *
 * Protobuf type <code>google.monitoring.v3.ServiceLevelObjective.View</code>
 */
class View
{
    /**
     * Same as FULL.
     *
     * Generated from protobuf enum <code>VIEW_UNSPECIFIED = 0;</code>
     */
    const VIEW_UNSPECIFIED = 0;
    /**
     * Return the embedded `ServiceLevelIndicator` in the form in which it was
     * defined. If it was defined using a `BasicSli`, return that `BasicSli`.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;
    /**
     * For `ServiceLevelIndicator`s using `BasicSli` articulation, instead
     * return the `ServiceLevelIndicator` with its mode of computation fully
     * spelled out as a `RequestBasedSli`. For `ServiceLevelIndicator`s using
     * `RequestBasedSli` or `WindowsBasedSli`, return the
     * `ServiceLevelIndicator` as it was provided.
     *
     * Generated from protobuf enum <code>EXPLICIT = 1;</code>
     */
    const EXPLICIT = 1;

    private static $valueToName = [
        self::VIEW_UNSPECIFIED => 'VIEW_UNSPECIFIED',
        self::FULL => 'FULL',
        self::EXPLICIT => 'EXPLICIT',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(View::class, \Google\Cloud\Monitoring\V3\ServiceLevelObjective_View::class);

