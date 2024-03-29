<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [Firestore.RunAggregationQuery][google.firestore.v1.Firestore.RunAggregationQuery].
 *
 * Generated from protobuf message <code>google.firestore.v1.RunAggregationQueryResponse</code>
 */
class RunAggregationQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A single aggregation result.
     * Not present when reporting partial progress.
     *
     * Generated from protobuf field <code>.google.firestore.v1.AggregationResult result = 1;</code>
     */
    private $result = null;
    /**
     * The transaction that was started as part of this request.
     * Only present on the first response when the request requested to start
     * a new transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     */
    private $transaction = '';
    /**
     * The time at which the aggregate result was computed. This is always
     * monotonically increasing; in this case, the previous AggregationResult in
     * the result stream are guaranteed not to have changed between their
     * `read_time` and this one.
     * If the query returns no results, a response with `read_time` and no
     * `result` will be sent, and this represents the time at which the query
     * was run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 3;</code>
     */
    private $read_time = null;
    /**
     * Query plan and execution statistics. Note that the returned stats are
     * subject to change as Firestore evolves.
     * This is only present when the request specifies a mode other than `NORMAL`
     * and is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ResultSetStats stats = 6;</code>
     */
    private $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\AggregationResult $result
     *           A single aggregation result.
     *           Not present when reporting partial progress.
     *     @type string $transaction
     *           The transaction that was started as part of this request.
     *           Only present on the first response when the request requested to start
     *           a new transaction.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           The time at which the aggregate result was computed. This is always
     *           monotonically increasing; in this case, the previous AggregationResult in
     *           the result stream are guaranteed not to have changed between their
     *           `read_time` and this one.
     *           If the query returns no results, a response with `read_time` and no
     *           `result` will be sent, and this represents the time at which the query
     *           was run.
     *     @type \Google\Cloud\Firestore\V1\ResultSetStats $stats
     *           Query plan and execution statistics. Note that the returned stats are
     *           subject to change as Firestore evolves.
     *           This is only present when the request specifies a mode other than `NORMAL`
     *           and is sent only once with the last response in the stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * A single aggregation result.
     * Not present when reporting partial progress.
     *
     * Generated from protobuf field <code>.google.firestore.v1.AggregationResult result = 1;</code>
     * @return \Google\Cloud\Firestore\V1\AggregationResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * A single aggregation result.
     * Not present when reporting partial progress.
     *
     * Generated from protobuf field <code>.google.firestore.v1.AggregationResult result = 1;</code>
     * @param \Google\Cloud\Firestore\V1\AggregationResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\AggregationResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * The transaction that was started as part of this request.
     * Only present on the first response when the request requested to start
     * a new transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction that was started as part of this request.
     * Only present on the first response when the request requested to start
     * a new transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

    /**
     * The time at which the aggregate result was computed. This is always
     * monotonically increasing; in this case, the previous AggregationResult in
     * the result stream are guaranteed not to have changed between their
     * `read_time` and this one.
     * If the query returns no results, a response with `read_time` and no
     * `result` will be sent, and this represents the time at which the query
     * was run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * The time at which the aggregate result was computed. This is always
     * monotonically increasing; in this case, the previous AggregationResult in
     * the result stream are guaranteed not to have changed between their
     * `read_time` and this one.
     * If the query returns no results, a response with `read_time` and no
     * `result` will be sent, and this represents the time at which the query
     * was run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * Query plan and execution statistics. Note that the returned stats are
     * subject to change as Firestore evolves.
     * This is only present when the request specifies a mode other than `NORMAL`
     * and is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ResultSetStats stats = 6;</code>
     * @return \Google\Cloud\Firestore\V1\ResultSetStats|null
     */
    public function getStats()
    {
        return $this->stats;
    }

    public function hasStats()
    {
        return isset($this->stats);
    }

    public function clearStats()
    {
        unset($this->stats);
    }

    /**
     * Query plan and execution statistics. Note that the returned stats are
     * subject to change as Firestore evolves.
     * This is only present when the request specifies a mode other than `NORMAL`
     * and is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ResultSetStats stats = 6;</code>
     * @param \Google\Cloud\Firestore\V1\ResultSetStats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\ResultSetStats::class);
        $this->stats = $var;

        return $this;
    }

}

