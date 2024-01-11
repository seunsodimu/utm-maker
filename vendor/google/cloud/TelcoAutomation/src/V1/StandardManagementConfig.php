<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the standard (GKE) cluster management.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.StandardManagementConfig</code>
 */
class StandardManagementConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the VPC Network to put the GKE cluster and nodes in. The
     * VPC will be created if it doesn't exist.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $network = '';
    /**
     * Optional. Specifies the subnet that the interface will be part of. Network
     * key must be specified and the subnet must be a subnetwork of the specified
     * network.
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $subnet = '';
    /**
     * Optional. The /28 network that the masters will use. It should be free
     * within the network.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $master_ipv4_cidr_block = '';
    /**
     * Optional. The IP address range for the cluster pod IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation
     * (e.g. 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string cluster_cidr_block = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cluster_cidr_block = '';
    /**
     * Optional. The IP address range for the cluster service IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation (e.g.
     * 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string services_cidr_block = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $services_cidr_block = '';
    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for pod IP addresses. Alternatively, cluster_cidr_block
     * can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string cluster_named_range = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cluster_named_range = '';
    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for service ClusterIPs. Alternatively,
     * services_cidr_block can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string services_named_range = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $services_named_range = '';
    /**
     * Optional. Master Authorized Network that supports multiple CIDR blocks.
     * Allows access to the k8s master from multiple blocks. It cannot be set at
     * the same time with the field man_block.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $master_authorized_networks_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Optional. Name of the VPC Network to put the GKE cluster and nodes in. The
     *           VPC will be created if it doesn't exist.
     *     @type string $subnet
     *           Optional. Specifies the subnet that the interface will be part of. Network
     *           key must be specified and the subnet must be a subnetwork of the specified
     *           network.
     *     @type string $master_ipv4_cidr_block
     *           Optional. The /28 network that the masters will use. It should be free
     *           within the network.
     *     @type string $cluster_cidr_block
     *           Optional. The IP address range for the cluster pod IPs. Set to blank to
     *           have a range chosen with the default size. Set to /netmask (e.g. /14) to
     *           have a range chosen with a specific netmask. Set to a CIDR notation
     *           (e.g. 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     *           172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *     @type string $services_cidr_block
     *           Optional. The IP address range for the cluster service IPs. Set to blank to
     *           have a range chosen with the default size. Set to /netmask (e.g. /14) to
     *           have a range chosen with a specific netmask. Set to a CIDR notation (e.g.
     *           10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     *           172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *     @type string $cluster_named_range
     *           Optional. The name of the existing secondary range in the cluster's
     *           subnetwork to use for pod IP addresses. Alternatively, cluster_cidr_block
     *           can be used to automatically create a GKE-managed one.
     *     @type string $services_named_range
     *           Optional. The name of the existing secondary range in the cluster's
     *           subnetwork to use for service ClusterIPs. Alternatively,
     *           services_cidr_block can be used to automatically create a GKE-managed one.
     *     @type \Google\Cloud\TelcoAutomation\V1\MasterAuthorizedNetworksConfig $master_authorized_networks_config
     *           Optional. Master Authorized Network that supports multiple CIDR blocks.
     *           Allows access to the k8s master from multiple blocks. It cannot be set at
     *           the same time with the field man_block.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the VPC Network to put the GKE cluster and nodes in. The
     * VPC will be created if it doesn't exist.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. Name of the VPC Network to put the GKE cluster and nodes in. The
     * VPC will be created if it doesn't exist.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. Specifies the subnet that the interface will be part of. Network
     * key must be specified and the subnet must be a subnetwork of the specified
     * network.
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * Optional. Specifies the subnet that the interface will be part of. Network
     * key must be specified and the subnet must be a subnetwork of the specified
     * network.
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnet($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet = $var;

        return $this;
    }

    /**
     * Optional. The /28 network that the masters will use. It should be free
     * within the network.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMasterIpv4CidrBlock()
    {
        return $this->master_ipv4_cidr_block;
    }

    /**
     * Optional. The /28 network that the masters will use. It should be free
     * within the network.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMasterIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * Optional. The IP address range for the cluster pod IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation
     * (e.g. 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string cluster_cidr_block = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClusterCidrBlock()
    {
        return $this->cluster_cidr_block;
    }

    /**
     * Optional. The IP address range for the cluster pod IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation
     * (e.g. 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string cluster_cidr_block = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterCidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_cidr_block = $var;

        return $this;
    }

    /**
     * Optional. The IP address range for the cluster service IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation (e.g.
     * 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string services_cidr_block = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServicesCidrBlock()
    {
        return $this->services_cidr_block;
    }

    /**
     * Optional. The IP address range for the cluster service IPs. Set to blank to
     * have a range chosen with the default size. Set to /netmask (e.g. /14) to
     * have a range chosen with a specific netmask. Set to a CIDR notation (e.g.
     * 10.96.0.0/14) from the RFC-1918 private networks (e.g. 10.0.0.0/8,
     * 172.16.0.0/12, 192.168.0.0/16) to pick a specific range to use.
     *
     * Generated from protobuf field <code>string services_cidr_block = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServicesCidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->services_cidr_block = $var;

        return $this;
    }

    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for pod IP addresses. Alternatively, cluster_cidr_block
     * can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string cluster_named_range = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClusterNamedRange()
    {
        return $this->cluster_named_range;
    }

    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for pod IP addresses. Alternatively, cluster_cidr_block
     * can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string cluster_named_range = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterNamedRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_named_range = $var;

        return $this;
    }

    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for service ClusterIPs. Alternatively,
     * services_cidr_block can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string services_named_range = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServicesNamedRange()
    {
        return $this->services_named_range;
    }

    /**
     * Optional. The name of the existing secondary range in the cluster's
     * subnetwork to use for service ClusterIPs. Alternatively,
     * services_cidr_block can be used to automatically create a GKE-managed one.
     *
     * Generated from protobuf field <code>string services_named_range = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServicesNamedRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->services_named_range = $var;

        return $this;
    }

    /**
     * Optional. Master Authorized Network that supports multiple CIDR blocks.
     * Allows access to the k8s master from multiple blocks. It cannot be set at
     * the same time with the field man_block.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\TelcoAutomation\V1\MasterAuthorizedNetworksConfig|null
     */
    public function getMasterAuthorizedNetworksConfig()
    {
        return $this->master_authorized_networks_config;
    }

    public function hasMasterAuthorizedNetworksConfig()
    {
        return isset($this->master_authorized_networks_config);
    }

    public function clearMasterAuthorizedNetworksConfig()
    {
        unset($this->master_authorized_networks_config);
    }

    /**
     * Optional. Master Authorized Network that supports multiple CIDR blocks.
     * Allows access to the k8s master from multiple blocks. It cannot be set at
     * the same time with the field man_block.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\TelcoAutomation\V1\MasterAuthorizedNetworksConfig $var
     * @return $this
     */
    public function setMasterAuthorizedNetworksConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TelcoAutomation\V1\MasterAuthorizedNetworksConfig::class);
        $this->master_authorized_networks_config = $var;

        return $this;
    }

}

