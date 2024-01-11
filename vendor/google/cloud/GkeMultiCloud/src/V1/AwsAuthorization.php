<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration related to the cluster RBAC settings.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsAuthorization</code>
 */
class AwsAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Users that can perform operations as a cluster admin. A managed
     * ClusterRoleBinding will be created to grant the `cluster-admin` ClusterRole
     * to the users. Up to ten admin users can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterUser admin_users = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $admin_users;
    /**
     * Optional. Groups of users that can perform operations as a cluster admin. A
     * managed ClusterRoleBinding will be created to grant the `cluster-admin`
     * ClusterRole to the groups. Up to ten admin groups can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterGroup admin_groups = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $admin_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AwsClusterUser>|\Google\Protobuf\Internal\RepeatedField $admin_users
     *           Optional. Users that can perform operations as a cluster admin. A managed
     *           ClusterRoleBinding will be created to grant the `cluster-admin` ClusterRole
     *           to the users. Up to ten admin users can be provided.
     *           For more info on RBAC, see
     *           https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AwsClusterGroup>|\Google\Protobuf\Internal\RepeatedField $admin_groups
     *           Optional. Groups of users that can perform operations as a cluster admin. A
     *           managed ClusterRoleBinding will be created to grant the `cluster-admin`
     *           ClusterRole to the groups. Up to ten admin groups can be provided.
     *           For more info on RBAC, see
     *           https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Users that can perform operations as a cluster admin. A managed
     * ClusterRoleBinding will be created to grant the `cluster-admin` ClusterRole
     * to the users. Up to ten admin users can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterUser admin_users = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdminUsers()
    {
        return $this->admin_users;
    }

    /**
     * Optional. Users that can perform operations as a cluster admin. A managed
     * ClusterRoleBinding will be created to grant the `cluster-admin` ClusterRole
     * to the users. Up to ten admin users can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterUser admin_users = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AwsClusterUser>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdminUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AwsClusterUser::class);
        $this->admin_users = $arr;

        return $this;
    }

    /**
     * Optional. Groups of users that can perform operations as a cluster admin. A
     * managed ClusterRoleBinding will be created to grant the `cluster-admin`
     * ClusterRole to the groups. Up to ten admin groups can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterGroup admin_groups = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdminGroups()
    {
        return $this->admin_groups;
    }

    /**
     * Optional. Groups of users that can perform operations as a cluster admin. A
     * managed ClusterRoleBinding will be created to grant the `cluster-admin`
     * ClusterRole to the groups. Up to ten admin groups can be provided.
     * For more info on RBAC, see
     * https://kubernetes.io/docs/reference/access-authn-authz/rbac/#user-facing-roles
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsClusterGroup admin_groups = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AwsClusterGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdminGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AwsClusterGroup::class);
        $this->admin_groups = $arr;

        return $this;
    }

}

