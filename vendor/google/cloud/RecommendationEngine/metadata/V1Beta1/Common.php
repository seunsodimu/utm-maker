<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/common.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/cloud/recommendationengine/v1beta1/common.proto)google.cloud.recommendationengine.v1beta1"�

FeatureMapl
categorical_features (2N.google.cloud.recommendationengine.v1beta1.FeatureMap.CategoricalFeaturesEntryh
numerical_features (2L.google.cloud.recommendationengine.v1beta1.FeatureMap.NumericalFeaturesEntry

StringList
value (	
	FloatList
value (|
CategoricalFeaturesEntry
key (	O
value (2@.google.cloud.recommendationengine.v1beta1.FeatureMap.StringList:8y
NumericalFeaturesEntry
key (	N
value (2?.google.cloud.recommendationengine.v1beta1.FeatureMap.FloatList:8B�
-com.google.cloud.recommendationengine.v1beta1PZacloud.google.com/go/recommendationengine/apiv1beta1/recommendationenginepb;recommendationenginepb�RECAI�)Google.Cloud.RecommendationEngine.V1Beta1�)Google\\Cloud\\RecommendationEngine\\V1beta1�,Google::Cloud::RecommendationEngine::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

