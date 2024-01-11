<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/security_marks.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class SecurityMarks
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/securitycenter/v1/security_marks.protogoogle.cloud.securitycenter.v1"�
SecurityMarks
name (	G
marks (28.google.cloud.securitycenter.v1.SecurityMarks.MarksEntry
canonical_name (	,

MarksEntry
key (	
value (	:8:��A�
+securitycenter.googleapis.com/SecurityMarks9organizations/{organization}/assets/{asset}/securityMarksNorganizations/{organization}/sources/{source}/findings/{finding}/securityMarks-folders/{folder}/assets/{asset}/securityMarks/projects/{project}/assets/{asset}/securityMarksBfolders/{folder}/sources/{source}/findings/{finding}/securityMarksDprojects/{project}/sources/{source}/findings/{finding}/securityMarksB�
"com.google.cloud.securitycenter.v1PZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

