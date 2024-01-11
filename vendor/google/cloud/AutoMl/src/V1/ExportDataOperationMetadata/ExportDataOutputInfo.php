<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/operations.proto

namespace Google\Cloud\AutoMl\V1\ExportDataOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Further describes this export data's output.
 * Supplements
 * [OutputConfig][google.cloud.automl.v1.OutputConfig].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ExportDataOperationMetadata.ExportDataOutputInfo</code>
 */
class ExportDataOutputInfo extends \Google\Protobuf\Internal\Message
{
    protected $output_location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_output_directory
     *           The full path of the Google Cloud Storage directory created, into which
     *           the exported data is written.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The full path of the Google Cloud Storage directory created, into which
     * the exported data is written.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1;</code>
     * @return string
     */
    public function getGcsOutputDirectory()
    {
        return $this->readOneof(1);
    }

    public function hasGcsOutputDirectory()
    {
        return $this->hasOneof(1);
    }

    /**
     * The full path of the Google Cloud Storage directory created, into which
     * the exported data is written.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsOutputDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputLocation()
    {
        return $this->whichOneof("output_location");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportDataOutputInfo::class, \Google\Cloud\AutoMl\V1\ExportDataOperationMetadata_ExportDataOutputInfo::class);

