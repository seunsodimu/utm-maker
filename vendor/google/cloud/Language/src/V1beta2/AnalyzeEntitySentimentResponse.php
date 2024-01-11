<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entity-level sentiment analysis response message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.AnalyzeEntitySentimentResponse</code>
 */
class AnalyzeEntitySentimentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The recognized entities in the input document with associated sentiments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     */
    private $entities;
    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language]
     * field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     */
    private $language = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Language\V1beta2\Entity>|\Google\Protobuf\Internal\RepeatedField $entities
     *           The recognized entities in the input document with associated sentiments.
     *     @type string $language
     *           The language of the text, which will be the same as the language specified
     *           in the request or, if not specified, the automatically-detected language.
     *           See [Document.language][google.cloud.language.v1beta2.Document.language]
     *           field for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The recognized entities in the input document with associated sentiments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * The recognized entities in the input document with associated sentiments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     * @param array<\Google\Cloud\Language\V1beta2\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta2\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language]
     * field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language]
     * field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

}

