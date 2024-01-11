<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The output of a DataQualityScan.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityResult</code>
 */
class DataQualityResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Overall data quality result -- `true` if all rules passed.
     *
     * Generated from protobuf field <code>bool passed = 5;</code>
     */
    private $passed = false;
    /**
     * Output only. The overall data quality score.
     * The score ranges between [0, 100] (up to two decimal points).
     *
     * Generated from protobuf field <code>optional float score = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $score = null;
    /**
     * A list of results at the dimension level.
     * A dimension will have a corresponding `DataQualityDimensionResult` if and
     * only if there is at least one rule with the 'dimension' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityDimensionResult dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * Output only. A list of results at the column level.
     * A column will have a corresponding `DataQualityColumnResult` if and only if
     * there is at least one rule with the 'column' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityColumnResult columns = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $columns;
    /**
     * A list of all the rules in a job, and their results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRuleResult rules = 3;</code>
     */
    private $rules;
    /**
     * The count of rows processed.
     *
     * Generated from protobuf field <code>int64 row_count = 4;</code>
     */
    private $row_count = 0;
    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 7;</code>
     */
    private $scanned_data = null;
    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult.PostScanActionsResult post_scan_actions_result = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $post_scan_actions_result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $passed
     *           Overall data quality result -- `true` if all rules passed.
     *     @type float $score
     *           Output only. The overall data quality score.
     *           The score ranges between [0, 100] (up to two decimal points).
     *     @type array<\Google\Cloud\Dataplex\V1\DataQualityDimensionResult>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           A list of results at the dimension level.
     *           A dimension will have a corresponding `DataQualityDimensionResult` if and
     *           only if there is at least one rule with the 'dimension' field set to it.
     *     @type array<\Google\Cloud\Dataplex\V1\DataQualityColumnResult>|\Google\Protobuf\Internal\RepeatedField $columns
     *           Output only. A list of results at the column level.
     *           A column will have a corresponding `DataQualityColumnResult` if and only if
     *           there is at least one rule with the 'column' field set to it.
     *     @type array<\Google\Cloud\Dataplex\V1\DataQualityRuleResult>|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of all the rules in a job, and their results.
     *     @type int|string $row_count
     *           The count of rows processed.
     *     @type \Google\Cloud\Dataplex\V1\ScannedData $scanned_data
     *           The data scanned for this result.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityResult\PostScanActionsResult $post_scan_actions_result
     *           Output only. The result of post scan actions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Overall data quality result -- `true` if all rules passed.
     *
     * Generated from protobuf field <code>bool passed = 5;</code>
     * @return bool
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * Overall data quality result -- `true` if all rules passed.
     *
     * Generated from protobuf field <code>bool passed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPassed($var)
    {
        GPBUtil::checkBool($var);
        $this->passed = $var;

        return $this;
    }

    /**
     * Output only. The overall data quality score.
     * The score ranges between [0, 100] (up to two decimal points).
     *
     * Generated from protobuf field <code>optional float score = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getScore()
    {
        return isset($this->score) ? $this->score : 0.0;
    }

    public function hasScore()
    {
        return isset($this->score);
    }

    public function clearScore()
    {
        unset($this->score);
    }

    /**
     * Output only. The overall data quality score.
     * The score ranges between [0, 100] (up to two decimal points).
     *
     * Generated from protobuf field <code>optional float score = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * A list of results at the dimension level.
     * A dimension will have a corresponding `DataQualityDimensionResult` if and
     * only if there is at least one rule with the 'dimension' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityDimensionResult dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * A list of results at the dimension level.
     * A dimension will have a corresponding `DataQualityDimensionResult` if and
     * only if there is at least one rule with the 'dimension' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityDimensionResult dimensions = 2;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataQualityDimensionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataQualityDimensionResult::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * Output only. A list of results at the column level.
     * A column will have a corresponding `DataQualityColumnResult` if and only if
     * there is at least one rule with the 'column' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityColumnResult columns = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Output only. A list of results at the column level.
     * A column will have a corresponding `DataQualityColumnResult` if and only if
     * there is at least one rule with the 'column' field set to it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityColumnResult columns = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataQualityColumnResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataQualityColumnResult::class);
        $this->columns = $arr;

        return $this;
    }

    /**
     * A list of all the rules in a job, and their results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRuleResult rules = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of all the rules in a job, and their results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRuleResult rules = 3;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataQualityRuleResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataQualityRuleResult::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * The count of rows processed.
     *
     * Generated from protobuf field <code>int64 row_count = 4;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The count of rows processed.
     *
     * Generated from protobuf field <code>int64 row_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 7;</code>
     * @return \Google\Cloud\Dataplex\V1\ScannedData|null
     */
    public function getScannedData()
    {
        return $this->scanned_data;
    }

    public function hasScannedData()
    {
        return isset($this->scanned_data);
    }

    public function clearScannedData()
    {
        unset($this->scanned_data);
    }

    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 7;</code>
     * @param \Google\Cloud\Dataplex\V1\ScannedData $var
     * @return $this
     */
    public function setScannedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\ScannedData::class);
        $this->scanned_data = $var;

        return $this;
    }

    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult.PostScanActionsResult post_scan_actions_result = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityResult\PostScanActionsResult|null
     */
    public function getPostScanActionsResult()
    {
        return $this->post_scan_actions_result;
    }

    public function hasPostScanActionsResult()
    {
        return isset($this->post_scan_actions_result);
    }

    public function clearPostScanActionsResult()
    {
        unset($this->post_scan_actions_result);
    }

    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult.PostScanActionsResult post_scan_actions_result = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityResult\PostScanActionsResult $var
     * @return $this
     */
    public function setPostScanActionsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityResult\PostScanActionsResult::class);
        $this->post_scan_actions_result = $var;

        return $this;
    }

}

