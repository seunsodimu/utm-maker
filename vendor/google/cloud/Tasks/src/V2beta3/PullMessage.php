<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pull Message.
 * This proto can only be used for tasks in a queue which has
 * [PULL][google.cloud.tasks.v2beta3.Queue.type] type. It currently exists for
 * backwards compatibility with the App Engine Task Queue SDK. This message type
 * maybe returned with methods
 * [list][google.cloud.tasks.v2beta3.CloudTask.ListTasks] and
 * [get][google.cloud.tasks.v2beta3.CloudTask.ListTasks], when the response view
 * is [FULL][google.cloud.tasks.v2beta3.Task.View.Full].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.PullMessage</code>
 */
class PullMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * A data payload consumed by the worker to execute the task.
     *
     * Generated from protobuf field <code>bytes payload = 1;</code>
     */
    private $payload = '';
    /**
     * The tasks's tag.
     * The tag is less than 500 characters.
     * SDK compatibility: Although the SDK allows tags to be either
     * string or
     * [bytes](https://cloud.google.com/appengine/docs/standard/java/javadoc/com/google/appengine/api/taskqueue/TaskOptions.html#tag-byte:A-),
     * only UTF-8 encoded tags can be used in Cloud Tasks. If a tag isn't UTF-8
     * encoded, the tag will be empty when the task is returned by Cloud Tasks.
     *
     * Generated from protobuf field <code>string tag = 2;</code>
     */
    private $tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payload
     *           A data payload consumed by the worker to execute the task.
     *     @type string $tag
     *           The tasks's tag.
     *           The tag is less than 500 characters.
     *           SDK compatibility: Although the SDK allows tags to be either
     *           string or
     *           [bytes](https://cloud.google.com/appengine/docs/standard/java/javadoc/com/google/appengine/api/taskqueue/TaskOptions.html#tag-byte:A-),
     *           only UTF-8 encoded tags can be used in Cloud Tasks. If a tag isn't UTF-8
     *           encoded, the tag will be empty when the task is returned by Cloud Tasks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * A data payload consumed by the worker to execute the task.
     *
     * Generated from protobuf field <code>bytes payload = 1;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * A data payload consumed by the worker to execute the task.
     *
     * Generated from protobuf field <code>bytes payload = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * The tasks's tag.
     * The tag is less than 500 characters.
     * SDK compatibility: Although the SDK allows tags to be either
     * string or
     * [bytes](https://cloud.google.com/appengine/docs/standard/java/javadoc/com/google/appengine/api/taskqueue/TaskOptions.html#tag-byte:A-),
     * only UTF-8 encoded tags can be used in Cloud Tasks. If a tag isn't UTF-8
     * encoded, the tag will be empty when the task is returned by Cloud Tasks.
     *
     * Generated from protobuf field <code>string tag = 2;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * The tasks's tag.
     * The tag is less than 500 characters.
     * SDK compatibility: Although the SDK allows tags to be either
     * string or
     * [bytes](https://cloud.google.com/appengine/docs/standard/java/javadoc/com/google/appengine/api/taskqueue/TaskOptions.html#tag-byte:A-),
     * only UTF-8 encoded tags can be used in Cloud Tasks. If a tag isn't UTF-8
     * encoded, the tag will be empty when the task is returned by Cloud Tasks.
     *
     * Generated from protobuf field <code>string tag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

}

