<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta\Cluster;

use UnexpectedValueException;

/**
 * Cluster State
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.Cluster.State</code>
 */
class State
{
    /**
     * The state of the cluster is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The cluster is active and running.
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * The cluster is stopped. All instances in the cluster are stopped.
     * Customers can start a stopped cluster at any point and all their
     * instances will come back to life with same names and IP resources. In
     * this state, customer pays for storage.
     * Associated backups could also be present in a stopped cluster.
     *
     * Generated from protobuf enum <code>STOPPED = 2;</code>
     */
    const STOPPED = 2;
    /**
     * The cluster is empty and has no associated resources.
     * All instances, associated storage and backups have been deleted.
     *
     * Generated from protobuf enum <code>EMPTY = 3;</code>
     */
    const PBEMPTY = 3;
    /**
     * The cluster is being created.
     *
     * Generated from protobuf enum <code>CREATING = 4;</code>
     */
    const CREATING = 4;
    /**
     * The cluster is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 5;</code>
     */
    const DELETING = 5;
    /**
     * The creation of the cluster failed.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;
    /**
     * The cluster is bootstrapping with data from some other source.
     * Direct mutations to the cluster (e.g. adding read pool) are not allowed.
     *
     * Generated from protobuf enum <code>BOOTSTRAPPING = 7;</code>
     */
    const BOOTSTRAPPING = 7;
    /**
     * The cluster is under maintenance. AlloyDB regularly performs maintenance
     * and upgrades on customer clusters. Updates on the cluster are
     * not allowed while the cluster is in this state.
     *
     * Generated from protobuf enum <code>MAINTENANCE = 8;</code>
     */
    const MAINTENANCE = 8;
    /**
     * The cluster is being promoted.
     *
     * Generated from protobuf enum <code>PROMOTING = 9;</code>
     */
    const PROMOTING = 9;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::READY => 'READY',
        self::STOPPED => 'STOPPED',
        self::PBEMPTY => 'EMPTY',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::BOOTSTRAPPING => 'BOOTSTRAPPING',
        self::MAINTENANCE => 'MAINTENANCE',
        self::PROMOTING => 'PROMOTING',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


