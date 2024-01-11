<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1\GovernanceEvent;

use UnexpectedValueException;

/**
 * Type of governance log event.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.GovernanceEvent.EventType</code>
 */
class EventType
{
    /**
     * An unspecified event type.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * Resource IAM policy update event.
     *
     * Generated from protobuf enum <code>RESOURCE_IAM_POLICY_UPDATE = 1;</code>
     */
    const RESOURCE_IAM_POLICY_UPDATE = 1;
    /**
     * BigQuery table create event.
     *
     * Generated from protobuf enum <code>BIGQUERY_TABLE_CREATE = 2;</code>
     */
    const BIGQUERY_TABLE_CREATE = 2;
    /**
     * BigQuery table update event.
     *
     * Generated from protobuf enum <code>BIGQUERY_TABLE_UPDATE = 3;</code>
     */
    const BIGQUERY_TABLE_UPDATE = 3;
    /**
     * BigQuery table delete event.
     *
     * Generated from protobuf enum <code>BIGQUERY_TABLE_DELETE = 4;</code>
     */
    const BIGQUERY_TABLE_DELETE = 4;
    /**
     * BigQuery connection create event.
     *
     * Generated from protobuf enum <code>BIGQUERY_CONNECTION_CREATE = 5;</code>
     */
    const BIGQUERY_CONNECTION_CREATE = 5;
    /**
     * BigQuery connection update event.
     *
     * Generated from protobuf enum <code>BIGQUERY_CONNECTION_UPDATE = 6;</code>
     */
    const BIGQUERY_CONNECTION_UPDATE = 6;
    /**
     * BigQuery connection delete event.
     *
     * Generated from protobuf enum <code>BIGQUERY_CONNECTION_DELETE = 7;</code>
     */
    const BIGQUERY_CONNECTION_DELETE = 7;
    /**
     * BigQuery taxonomy created.
     *
     * Generated from protobuf enum <code>BIGQUERY_TAXONOMY_CREATE = 10;</code>
     */
    const BIGQUERY_TAXONOMY_CREATE = 10;
    /**
     * BigQuery policy tag created.
     *
     * Generated from protobuf enum <code>BIGQUERY_POLICY_TAG_CREATE = 11;</code>
     */
    const BIGQUERY_POLICY_TAG_CREATE = 11;
    /**
     * BigQuery policy tag deleted.
     *
     * Generated from protobuf enum <code>BIGQUERY_POLICY_TAG_DELETE = 12;</code>
     */
    const BIGQUERY_POLICY_TAG_DELETE = 12;
    /**
     * BigQuery set iam policy for policy tag.
     *
     * Generated from protobuf enum <code>BIGQUERY_POLICY_TAG_SET_IAM_POLICY = 13;</code>
     */
    const BIGQUERY_POLICY_TAG_SET_IAM_POLICY = 13;
    /**
     * Access policy update event.
     *
     * Generated from protobuf enum <code>ACCESS_POLICY_UPDATE = 14;</code>
     */
    const ACCESS_POLICY_UPDATE = 14;
    /**
     * Number of resources matched with particular Query.
     *
     * Generated from protobuf enum <code>GOVERNANCE_RULE_MATCHED_RESOURCES = 15;</code>
     */
    const GOVERNANCE_RULE_MATCHED_RESOURCES = 15;
    /**
     * Rule processing exceeds the allowed limit.
     *
     * Generated from protobuf enum <code>GOVERNANCE_RULE_SEARCH_LIMIT_EXCEEDS = 16;</code>
     */
    const GOVERNANCE_RULE_SEARCH_LIMIT_EXCEEDS = 16;
    /**
     * Rule processing errors.
     *
     * Generated from protobuf enum <code>GOVERNANCE_RULE_ERRORS = 17;</code>
     */
    const GOVERNANCE_RULE_ERRORS = 17;
    /**
     * Governance rule prcoessing Event.
     *
     * Generated from protobuf enum <code>GOVERNANCE_RULE_PROCESSING = 18;</code>
     */
    const GOVERNANCE_RULE_PROCESSING = 18;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::RESOURCE_IAM_POLICY_UPDATE => 'RESOURCE_IAM_POLICY_UPDATE',
        self::BIGQUERY_TABLE_CREATE => 'BIGQUERY_TABLE_CREATE',
        self::BIGQUERY_TABLE_UPDATE => 'BIGQUERY_TABLE_UPDATE',
        self::BIGQUERY_TABLE_DELETE => 'BIGQUERY_TABLE_DELETE',
        self::BIGQUERY_CONNECTION_CREATE => 'BIGQUERY_CONNECTION_CREATE',
        self::BIGQUERY_CONNECTION_UPDATE => 'BIGQUERY_CONNECTION_UPDATE',
        self::BIGQUERY_CONNECTION_DELETE => 'BIGQUERY_CONNECTION_DELETE',
        self::BIGQUERY_TAXONOMY_CREATE => 'BIGQUERY_TAXONOMY_CREATE',
        self::BIGQUERY_POLICY_TAG_CREATE => 'BIGQUERY_POLICY_TAG_CREATE',
        self::BIGQUERY_POLICY_TAG_DELETE => 'BIGQUERY_POLICY_TAG_DELETE',
        self::BIGQUERY_POLICY_TAG_SET_IAM_POLICY => 'BIGQUERY_POLICY_TAG_SET_IAM_POLICY',
        self::ACCESS_POLICY_UPDATE => 'ACCESS_POLICY_UPDATE',
        self::GOVERNANCE_RULE_MATCHED_RESOURCES => 'GOVERNANCE_RULE_MATCHED_RESOURCES',
        self::GOVERNANCE_RULE_SEARCH_LIMIT_EXCEEDS => 'GOVERNANCE_RULE_SEARCH_LIMIT_EXCEEDS',
        self::GOVERNANCE_RULE_ERRORS => 'GOVERNANCE_RULE_ERRORS',
        self::GOVERNANCE_RULE_PROCESSING => 'GOVERNANCE_RULE_PROCESSING',
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


