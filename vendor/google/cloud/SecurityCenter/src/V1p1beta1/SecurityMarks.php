<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/security_marks.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User specified security marks that are attached to the parent Security
 * Command Center resource. Security marks are scoped within a Security Command
 * Center organization -- they can be modified and viewed by all users who have
 * proper permissions on the organization.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.SecurityMarks</code>
 */
class SecurityMarks extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of the SecurityMarks. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Mutable user specified security marks belonging to the parent resource.
     * Constraints are as follows:
     *   * Keys and values are treated as case insensitive
     *   * Keys must be between 1 - 256 characters (inclusive)
     *   * Keys must be letters, numbers, underscores, or dashes
     *   * Values have leading and trailing whitespace trimmed, remaining
     *     characters must be between 1 - 4096 characters (inclusive)
     *
     * Generated from protobuf field <code>map<string, string> marks = 2;</code>
     */
    private $marks;
    /**
     * The canonical name of the marks.
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "folders/{folder_id}/assets/{asset_id}/securityMarks"
     * "projects/{project_number}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "folders/{folder_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "projects/{project_number}/sources/{source_id}/findings/{finding_id}/securityMarks"
     *
     * Generated from protobuf field <code>string canonical_name = 3;</code>
     */
    private $canonical_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The relative resource name of the SecurityMarks. See:
     *           https://cloud.google.com/apis/design/resource_names#relative_resource_name
     *           Examples:
     *           "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     *           "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks".
     *     @type array|\Google\Protobuf\Internal\MapField $marks
     *           Mutable user specified security marks belonging to the parent resource.
     *           Constraints are as follows:
     *             * Keys and values are treated as case insensitive
     *             * Keys must be between 1 - 256 characters (inclusive)
     *             * Keys must be letters, numbers, underscores, or dashes
     *             * Values have leading and trailing whitespace trimmed, remaining
     *               characters must be between 1 - 4096 characters (inclusive)
     *     @type string $canonical_name
     *           The canonical name of the marks.
     *           Examples:
     *           "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     *           "folders/{folder_id}/assets/{asset_id}/securityMarks"
     *           "projects/{project_number}/assets/{asset_id}/securityMarks"
     *           "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     *           "folders/{folder_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     *           "projects/{project_number}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecurityMarks::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of the SecurityMarks. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The relative resource name of the SecurityMarks. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Mutable user specified security marks belonging to the parent resource.
     * Constraints are as follows:
     *   * Keys and values are treated as case insensitive
     *   * Keys must be between 1 - 256 characters (inclusive)
     *   * Keys must be letters, numbers, underscores, or dashes
     *   * Values have leading and trailing whitespace trimmed, remaining
     *     characters must be between 1 - 4096 characters (inclusive)
     *
     * Generated from protobuf field <code>map<string, string> marks = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Mutable user specified security marks belonging to the parent resource.
     * Constraints are as follows:
     *   * Keys and values are treated as case insensitive
     *   * Keys must be between 1 - 256 characters (inclusive)
     *   * Keys must be letters, numbers, underscores, or dashes
     *   * Values have leading and trailing whitespace trimmed, remaining
     *     characters must be between 1 - 4096 characters (inclusive)
     *
     * Generated from protobuf field <code>map<string, string> marks = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMarks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->marks = $arr;

        return $this;
    }

    /**
     * The canonical name of the marks.
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "folders/{folder_id}/assets/{asset_id}/securityMarks"
     * "projects/{project_number}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "folders/{folder_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "projects/{project_number}/sources/{source_id}/findings/{finding_id}/securityMarks"
     *
     * Generated from protobuf field <code>string canonical_name = 3;</code>
     * @return string
     */
    public function getCanonicalName()
    {
        return $this->canonical_name;
    }

    /**
     * The canonical name of the marks.
     * Examples:
     * "organizations/{organization_id}/assets/{asset_id}/securityMarks"
     * "folders/{folder_id}/assets/{asset_id}/securityMarks"
     * "projects/{project_number}/assets/{asset_id}/securityMarks"
     * "organizations/{organization_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "folders/{folder_id}/sources/{source_id}/findings/{finding_id}/securityMarks"
     * "projects/{project_number}/sources/{source_id}/findings/{finding_id}/securityMarks"
     *
     * Generated from protobuf field <code>string canonical_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_name = $var;

        return $this;
    }

}

