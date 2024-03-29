<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ExportTestCasesRequest;

use UnexpectedValueException;

/**
 * Data format of the exported test cases.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.ExportTestCasesRequest.DataFormat</code>
 */
class DataFormat
{
    /**
     * Unspecified format.
     *
     * Generated from protobuf enum <code>DATA_FORMAT_UNSPECIFIED = 0;</code>
     */
    const DATA_FORMAT_UNSPECIFIED = 0;
    /**
     * Raw bytes.
     *
     * Generated from protobuf enum <code>BLOB = 1;</code>
     */
    const BLOB = 1;
    /**
     * JSON format.
     *
     * Generated from protobuf enum <code>JSON = 2;</code>
     */
    const JSON = 2;

    private static $valueToName = [
        self::DATA_FORMAT_UNSPECIFIED => 'DATA_FORMAT_UNSPECIFIED',
        self::BLOB => 'BLOB',
        self::JSON => 'JSON',
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


