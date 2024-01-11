<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `CommitRepositoryChanges` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CommitRepositoryChangesRequest</code>
 */
class CommitRepositoryChangesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The changes to commit to the repository.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CommitMetadata commit_metadata = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $commit_metadata = null;
    /**
     * Optional. The commit SHA which must be the repository's current HEAD before
     * applying this commit; otherwise this request will fail. If unset, no
     * validation on the current HEAD commit SHA is performed.
     *
     * Generated from protobuf field <code>string required_head_commit_sha = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $required_head_commit_sha = '';
    /**
     * A map to the path of the file to the operation. The path is the full file
     * path including filename, from repository root.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dataform.v1beta1.CommitRepositoryChangesRequest.FileOperation> file_operations = 3;</code>
     */
    private $file_operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The repository's name.
     *     @type \Google\Cloud\Dataform\V1beta1\CommitMetadata $commit_metadata
     *           Required. The changes to commit to the repository.
     *     @type string $required_head_commit_sha
     *           Optional. The commit SHA which must be the repository's current HEAD before
     *           applying this commit; otherwise this request will fail. If unset, no
     *           validation on the current HEAD commit SHA is performed.
     *     @type array|\Google\Protobuf\Internal\MapField $file_operations
     *           A map to the path of the file to the operation. The path is the full file
     *           path including filename, from repository root.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The changes to commit to the repository.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CommitMetadata commit_metadata = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataform\V1beta1\CommitMetadata|null
     */
    public function getCommitMetadata()
    {
        return $this->commit_metadata;
    }

    public function hasCommitMetadata()
    {
        return isset($this->commit_metadata);
    }

    public function clearCommitMetadata()
    {
        unset($this->commit_metadata);
    }

    /**
     * Required. The changes to commit to the repository.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CommitMetadata commit_metadata = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataform\V1beta1\CommitMetadata $var
     * @return $this
     */
    public function setCommitMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\CommitMetadata::class);
        $this->commit_metadata = $var;

        return $this;
    }

    /**
     * Optional. The commit SHA which must be the repository's current HEAD before
     * applying this commit; otherwise this request will fail. If unset, no
     * validation on the current HEAD commit SHA is performed.
     *
     * Generated from protobuf field <code>string required_head_commit_sha = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequiredHeadCommitSha()
    {
        return $this->required_head_commit_sha;
    }

    /**
     * Optional. The commit SHA which must be the repository's current HEAD before
     * applying this commit; otherwise this request will fail. If unset, no
     * validation on the current HEAD commit SHA is performed.
     *
     * Generated from protobuf field <code>string required_head_commit_sha = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequiredHeadCommitSha($var)
    {
        GPBUtil::checkString($var, True);
        $this->required_head_commit_sha = $var;

        return $this;
    }

    /**
     * A map to the path of the file to the operation. The path is the full file
     * path including filename, from repository root.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dataform.v1beta1.CommitRepositoryChangesRequest.FileOperation> file_operations = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFileOperations()
    {
        return $this->file_operations;
    }

    /**
     * A map to the path of the file to the operation. The path is the full file
     * path including filename, from repository root.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dataform.v1beta1.CommitRepositoryChangesRequest.FileOperation> file_operations = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFileOperations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\CommitRepositoryChangesRequest\FileOperation::class);
        $this->file_operations = $arr;

        return $this;
    }

}

