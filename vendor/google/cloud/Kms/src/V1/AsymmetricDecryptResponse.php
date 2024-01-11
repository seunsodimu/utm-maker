<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeyManagementService.AsymmetricDecrypt][google.cloud.kms.v1.KeyManagementService.AsymmetricDecrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.AsymmetricDecryptResponse</code>
 */
class AsymmetricDecryptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     */
    private $plaintext = '';
    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     * An integrity check of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * can be performed by computing the CRC32C checksum of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * and comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     */
    private $plaintext_crc32c = null;
    /**
     * Integrity verification field. A flag indicating whether
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [ciphertext][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext]. A
     * false value of this field indicates either that
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_ciphertext_crc32c = 3;</code>
     */
    private $verified_ciphertext_crc32c = false;
    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in
     * decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     */
    private $protection_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plaintext
     *           The decrypted data originally encrypted with the matching public key.
     *     @type \Google\Protobuf\Int64Value $plaintext_crc32c
     *           Integrity verification field. A CRC32C checksum of the returned
     *           [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     *           An integrity check of
     *           [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     *           can be performed by computing the CRC32C checksum of
     *           [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     *           and comparing your results to this field. Discard the response in case of
     *           non-matching checksum values, and perform a limited number of retries. A
     *           persistent mismatch may indicate an issue in your computation of the CRC32C
     *           checksum. Note: This field is defined as int64 for reasons of compatibility
     *           across different languages. However, it is a non-negative integer, which
     *           will never exceed 2^32-1, and can be safely downconverted to uint32 in
     *           languages that support this type.
     *     @type bool $verified_ciphertext_crc32c
     *           Integrity verification field. A flag indicating whether
     *           [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     *           was received by
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     *           for the integrity verification of the
     *           [ciphertext][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext]. A
     *           false value of this field indicates either that
     *           [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     *           was left unset or that it was not delivered to
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     *           set
     *           [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     *           but this field is still false, discard the response and perform a limited
     *           number of retries.
     *     @type int $protection_level
     *           The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in
     *           decryption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaintext($var)
    {
        GPBUtil::checkString($var, False);
        $this->plaintext = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     * An integrity check of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * can be performed by computing the CRC32C checksum of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * and comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getPlaintextCrc32C()
    {
        return $this->plaintext_crc32c;
    }

    public function hasPlaintextCrc32C()
    {
        return isset($this->plaintext_crc32c);
    }

    public function clearPlaintextCrc32C()
    {
        unset($this->plaintext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getPlaintextCrc32C()</code>

     * Integrity verification field. A CRC32C checksum of the returned
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     * An integrity check of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * can be performed by computing the CRC32C checksum of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * and comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @return int|string|null
     */
    public function getPlaintextCrc32CValue()
    {
        return $this->readWrapperValue("plaintext_crc32c");
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     * An integrity check of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * can be performed by computing the CRC32C checksum of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * and comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPlaintextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->plaintext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C checksum of the returned
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext].
     * An integrity check of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * can be performed by computing the CRC32C checksum of
     * [AsymmetricDecryptResponse.plaintext][google.cloud.kms.v1.AsymmetricDecryptResponse.plaintext]
     * and comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPlaintextCrc32CValue($var)
    {
        $this->writeWrapperValue("plaintext_crc32c", $var);
        return $this;}

    /**
     * Integrity verification field. A flag indicating whether
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [ciphertext][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext]. A
     * false value of this field indicates either that
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_ciphertext_crc32c = 3;</code>
     * @return bool
     */
    public function getVerifiedCiphertextCrc32C()
    {
        return $this->verified_ciphertext_crc32c;
    }

    /**
     * Integrity verification field. A flag indicating whether
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [ciphertext][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext]. A
     * false value of this field indicates either that
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [AsymmetricDecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.AsymmetricDecryptRequest.ciphertext_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_ciphertext_crc32c = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerifiedCiphertextCrc32C($var)
    {
        GPBUtil::checkBool($var);
        $this->verified_ciphertext_crc32c = $var;

        return $this;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in
     * decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in
     * decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

}

