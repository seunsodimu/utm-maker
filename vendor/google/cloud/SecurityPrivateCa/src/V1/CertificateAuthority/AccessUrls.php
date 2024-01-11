<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateAuthority;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * URLs where a
 * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
 * will publish content.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls</code>
 */
class AccessUrls extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CA certificate is published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>string ca_certificate_access_url = 1;</code>
     */
    private $ca_certificate_access_url = '';
    /**
     * The URLs where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CRLs are published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2;</code>
     */
    private $crl_access_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ca_certificate_access_url
     *           The URL where this
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     *           CA certificate is published. This will only be set for CAs that have been
     *           activated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $crl_access_urls
     *           The URLs where this
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     *           CRLs are published. This will only be set for CAs that have been
     *           activated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CA certificate is published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>string ca_certificate_access_url = 1;</code>
     * @return string
     */
    public function getCaCertificateAccessUrl()
    {
        return $this->ca_certificate_access_url;
    }

    /**
     * The URL where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CA certificate is published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>string ca_certificate_access_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCertificateAccessUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_certificate_access_url = $var;

        return $this;
    }

    /**
     * The URLs where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CRLs are published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCrlAccessUrls()
    {
        return $this->crl_access_urls;
    }

    /**
     * The URLs where this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CRLs are published. This will only be set for CAs that have been
     * activated.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCrlAccessUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->crl_access_urls = $arr;

        return $this;
    }

}


