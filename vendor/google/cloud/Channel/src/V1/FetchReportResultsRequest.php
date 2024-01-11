<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/reports_service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults].
 *
 * @deprecated
 * Generated from protobuf message <code>google.cloud.channel.v1.FetchReportResultsRequest</code>
 */
class FetchReportResultsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The report job created by
     * [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     * Report_job uses the format:
     * accounts/{account_id}/reportJobs/{report_job_id}
     *
     * Generated from protobuf field <code>string report_job = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $report_job = '';
    /**
     * Optional. Requested page size of the report. The server may return fewer
     * results than requested. If you don't specify a page size, the server uses a
     * sensible default (may change over time).
     * The maximum value is 30,000; the server will change larger values to
     * 30,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token that specifies a page of results beyond the first page.
     * Obtained through
     * [FetchReportResultsResponse.next_page_token][google.cloud.channel.v1.FetchReportResultsResponse.next_page_token]
     * of the previous
     * [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. List of keys specifying which report partitions to return.
     * If empty, returns all partitions.
     *
     * Generated from protobuf field <code>repeated string partition_keys = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $partition_keys;

    /**
     * @param string $reportJob Required. The report job created by
     *                          [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     *                          Report_job uses the format:
     *                          accounts/{account_id}/reportJobs/{report_job_id}
     *                          Please see {@see CloudChannelReportsServiceClient::reportJobName()} for help formatting this field.
     *
     * @return \Google\Cloud\Channel\V1\FetchReportResultsRequest
     *
     * @experimental
     */
    public static function build(string $reportJob): self
    {
        return (new self())
            ->setReportJob($reportJob);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $report_job
     *           Required. The report job created by
     *           [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     *           Report_job uses the format:
     *           accounts/{account_id}/reportJobs/{report_job_id}
     *     @type int $page_size
     *           Optional. Requested page size of the report. The server may return fewer
     *           results than requested. If you don't specify a page size, the server uses a
     *           sensible default (may change over time).
     *           The maximum value is 30,000; the server will change larger values to
     *           30,000.
     *     @type string $page_token
     *           Optional. A token that specifies a page of results beyond the first page.
     *           Obtained through
     *           [FetchReportResultsResponse.next_page_token][google.cloud.channel.v1.FetchReportResultsResponse.next_page_token]
     *           of the previous
     *           [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults]
     *           call.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $partition_keys
     *           Optional. List of keys specifying which report partitions to return.
     *           If empty, returns all partitions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\ReportsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The report job created by
     * [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     * Report_job uses the format:
     * accounts/{account_id}/reportJobs/{report_job_id}
     *
     * Generated from protobuf field <code>string report_job = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getReportJob()
    {
        return $this->report_job;
    }

    /**
     * Required. The report job created by
     * [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     * Report_job uses the format:
     * accounts/{account_id}/reportJobs/{report_job_id}
     *
     * Generated from protobuf field <code>string report_job = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setReportJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->report_job = $var;

        return $this;
    }

    /**
     * Optional. Requested page size of the report. The server may return fewer
     * results than requested. If you don't specify a page size, the server uses a
     * sensible default (may change over time).
     * The maximum value is 30,000; the server will change larger values to
     * 30,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size of the report. The server may return fewer
     * results than requested. If you don't specify a page size, the server uses a
     * sensible default (may change over time).
     * The maximum value is 30,000; the server will change larger values to
     * 30,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token that specifies a page of results beyond the first page.
     * Obtained through
     * [FetchReportResultsResponse.next_page_token][google.cloud.channel.v1.FetchReportResultsResponse.next_page_token]
     * of the previous
     * [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token that specifies a page of results beyond the first page.
     * Obtained through
     * [FetchReportResultsResponse.next_page_token][google.cloud.channel.v1.FetchReportResultsResponse.next_page_token]
     * of the previous
     * [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. List of keys specifying which report partitions to return.
     * If empty, returns all partitions.
     *
     * Generated from protobuf field <code>repeated string partition_keys = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionKeys()
    {
        return $this->partition_keys;
    }

    /**
     * Optional. List of keys specifying which report partitions to return.
     * If empty, returns all partitions.
     *
     * Generated from protobuf field <code>repeated string partition_keys = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->partition_keys = $arr;

        return $this;
    }

}

