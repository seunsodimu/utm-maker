<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Webhook\GenericWebService;

use UnexpectedValueException;

/**
 * Represents the type of webhook configuration.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.Webhook.GenericWebService.WebhookType</code>
 */
class WebhookType
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>WEBHOOK_TYPE_UNSPECIFIED = 0;</code>
     */
    const WEBHOOK_TYPE_UNSPECIFIED = 0;
    /**
     * Represents a standard webhook.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * Represents a flexible webhook.
     *
     * Generated from protobuf enum <code>FLEXIBLE = 2;</code>
     */
    const FLEXIBLE = 2;

    private static $valueToName = [
        self::WEBHOOK_TYPE_UNSPECIFIED => 'WEBHOOK_TYPE_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::FLEXIBLE => 'FLEXIBLE',
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


