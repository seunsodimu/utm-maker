<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Developer Preview](https://developers.google.com/workspace/preview).
 * Virtual place where conferences are held. Only one active conference can be
 * held in one space at any given time.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.Space</code>
 */
class Space extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Resource name of the space.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Output only. URI used to join meeting, such as
     * `https://meet.google.com/abc-mnop-xyz`.
     *
     * Generated from protobuf field <code>string meeting_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $meeting_uri = '';
    /**
     * Output only. Type friendly code to join the meeting. Format:
     * `[a-z]+-[a-z]+-[a-z]+` such as `abc-mnop-xyz`. The maximum length is 128
     * characters. Can ONLY be used as alias of the space ID to get the space.
     *
     * Generated from protobuf field <code>string meeting_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $meeting_code = '';
    /**
     * Configuration pertaining to the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig config = 5;</code>
     */
    protected $config = null;
    /**
     * Active conference if it exists.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.ActiveConference active_conference = 6;</code>
     */
    protected $active_conference = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. Resource name of the space.
     *           Format: `spaces/{space}`
     *     @type string $meeting_uri
     *           Output only. URI used to join meeting, such as
     *           `https://meet.google.com/abc-mnop-xyz`.
     *     @type string $meeting_code
     *           Output only. Type friendly code to join the meeting. Format:
     *           `[a-z]+-[a-z]+-[a-z]+` such as `abc-mnop-xyz`. The maximum length is 128
     *           characters. Can ONLY be used as alias of the space ID to get the space.
     *     @type \Google\Apps\Meet\V2beta\SpaceConfig $config
     *           Configuration pertaining to the meeting space.
     *     @type \Google\Apps\Meet\V2beta\ActiveConference $active_conference
     *           Active conference if it exists.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Resource name of the space.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Resource name of the space.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Output only. URI used to join meeting, such as
     * `https://meet.google.com/abc-mnop-xyz`.
     *
     * Generated from protobuf field <code>string meeting_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMeetingUri()
    {
        return $this->meeting_uri;
    }

    /**
     * Output only. URI used to join meeting, such as
     * `https://meet.google.com/abc-mnop-xyz`.
     *
     * Generated from protobuf field <code>string meeting_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMeetingUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->meeting_uri = $var;

        return $this;
    }

    /**
     * Output only. Type friendly code to join the meeting. Format:
     * `[a-z]+-[a-z]+-[a-z]+` such as `abc-mnop-xyz`. The maximum length is 128
     * characters. Can ONLY be used as alias of the space ID to get the space.
     *
     * Generated from protobuf field <code>string meeting_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMeetingCode()
    {
        return $this->meeting_code;
    }

    /**
     * Output only. Type friendly code to join the meeting. Format:
     * `[a-z]+-[a-z]+-[a-z]+` such as `abc-mnop-xyz`. The maximum length is 128
     * characters. Can ONLY be used as alias of the space ID to get the space.
     *
     * Generated from protobuf field <code>string meeting_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMeetingCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->meeting_code = $var;

        return $this;
    }

    /**
     * Configuration pertaining to the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig config = 5;</code>
     * @return \Google\Apps\Meet\V2beta\SpaceConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Configuration pertaining to the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig config = 5;</code>
     * @param \Google\Apps\Meet\V2beta\SpaceConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2beta\SpaceConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Active conference if it exists.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.ActiveConference active_conference = 6;</code>
     * @return \Google\Apps\Meet\V2beta\ActiveConference|null
     */
    public function getActiveConference()
    {
        return $this->active_conference;
    }

    public function hasActiveConference()
    {
        return isset($this->active_conference);
    }

    public function clearActiveConference()
    {
        unset($this->active_conference);
    }

    /**
     * Active conference if it exists.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.ActiveConference active_conference = 6;</code>
     * @param \Google\Apps\Meet\V2beta\ActiveConference $var
     * @return $this
     */
    public function setActiveConference($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2beta\ActiveConference::class);
        $this->active_conference = $var;

        return $this;
    }

}

