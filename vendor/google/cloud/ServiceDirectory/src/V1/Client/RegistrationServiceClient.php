<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/servicedirectory/v1/registration_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ServiceDirectory\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\ServiceDirectory\V1\CreateEndpointRequest;
use Google\Cloud\ServiceDirectory\V1\CreateNamespaceRequest;
use Google\Cloud\ServiceDirectory\V1\CreateServiceRequest;
use Google\Cloud\ServiceDirectory\V1\DeleteEndpointRequest;
use Google\Cloud\ServiceDirectory\V1\DeleteNamespaceRequest;
use Google\Cloud\ServiceDirectory\V1\DeleteServiceRequest;
use Google\Cloud\ServiceDirectory\V1\Endpoint;
use Google\Cloud\ServiceDirectory\V1\GetEndpointRequest;
use Google\Cloud\ServiceDirectory\V1\GetNamespaceRequest;
use Google\Cloud\ServiceDirectory\V1\GetServiceRequest;
use Google\Cloud\ServiceDirectory\V1\ListEndpointsRequest;
use Google\Cloud\ServiceDirectory\V1\ListNamespacesRequest;
use Google\Cloud\ServiceDirectory\V1\ListServicesRequest;
use Google\Cloud\ServiceDirectory\V1\PBNamespace;
use Google\Cloud\ServiceDirectory\V1\Service;
use Google\Cloud\ServiceDirectory\V1\UpdateEndpointRequest;
use Google\Cloud\ServiceDirectory\V1\UpdateNamespaceRequest;
use Google\Cloud\ServiceDirectory\V1\UpdateServiceRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service Directory API for registering services. It defines the following
 * resource model:
 *
 * - The API has a collection of
 * [Namespace][google.cloud.servicedirectory.v1.Namespace]
 * resources, named `projects/&#42;/locations/&#42;/namespaces/*`.
 *
 * - Each Namespace has a collection of
 * [Service][google.cloud.servicedirectory.v1.Service] resources, named
 * `projects/&#42;/locations/&#42;/namespaces/&#42;/services/*`.
 *
 * - Each Service has a collection of
 * [Endpoint][google.cloud.servicedirectory.v1.Endpoint]
 * resources, named
 * `projects/&#42;/locations/&#42;/namespaces/&#42;/services/&#42;/endpoints/*`.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createEndpointAsync(CreateEndpointRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createNamespaceAsync(CreateNamespaceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createServiceAsync(CreateServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteEndpointAsync(DeleteEndpointRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteNamespaceAsync(DeleteNamespaceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteServiceAsync(DeleteServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getEndpointAsync(GetEndpointRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getNamespaceAsync(GetNamespaceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getServiceAsync(GetServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listEndpointsAsync(ListEndpointsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listNamespacesAsync(ListNamespacesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listServicesAsync(ListServicesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateEndpointAsync(UpdateEndpointRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateNamespaceAsync(UpdateNamespaceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateServiceAsync(UpdateServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class RegistrationServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.servicedirectory.v1.RegistrationService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'servicedirectory.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'servicedirectory.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/registration_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/registration_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/registration_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/registration_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $namespace
     * @param string $service
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName(string $project, string $location, string $namespace, string $service, string $endpoint): string
    {
        return self::getPathTemplate('endpoint')->render([
            'project' => $project,
            'location' => $location,
            'namespace' => $namespace,
            'service' => $service,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a namespace
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $namespace
     *
     * @return string The formatted namespace resource.
     */
    public static function namespaceName(string $project, string $location, string $namespace): string
    {
        return self::getPathTemplate('namespace')->render([
            'project' => $project,
            'location' => $location,
            'namespace' => $namespace,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a network
     * resource.
     *
     * @param string $project
     * @param string $network
     *
     * @return string The formatted network resource.
     */
    public static function networkName(string $project, string $network): string
    {
        return self::getPathTemplate('network')->render([
            'project' => $project,
            'network' => $network,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $namespace
     * @param string $service
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $project, string $location, string $namespace, string $service): string
    {
        return self::getPathTemplate('service')->render([
            'project' => $project,
            'location' => $location,
            'namespace' => $namespace,
            'service' => $service,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - endpoint: projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}/endpoints/{endpoint}
     * - location: projects/{project}/locations/{location}
     * - namespace: projects/{project}/locations/{location}/namespaces/{namespace}
     * - network: projects/{project}/locations/global/networks/{network}
     * - service: projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'servicedirectory.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates an endpoint, and returns the new endpoint.
     *
     * The async variant is {@see RegistrationServiceClient::createEndpointAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/create_endpoint.php
     *
     * @param CreateEndpointRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Endpoint
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createEndpoint(CreateEndpointRequest $request, array $callOptions = []): Endpoint
    {
        return $this->startApiCall('CreateEndpoint', $request, $callOptions)->wait();
    }

    /**
     * Creates a namespace, and returns the new namespace.
     *
     * The async variant is {@see RegistrationServiceClient::createNamespaceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/create_namespace.php
     *
     * @param CreateNamespaceRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBNamespace
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createNamespace(CreateNamespaceRequest $request, array $callOptions = []): PBNamespace
    {
        return $this->startApiCall('CreateNamespace', $request, $callOptions)->wait();
    }

    /**
     * Creates a service, and returns the new service.
     *
     * The async variant is {@see RegistrationServiceClient::createServiceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/create_service.php
     *
     * @param CreateServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createService(CreateServiceRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('CreateService', $request, $callOptions)->wait();
    }

    /**
     * Deletes an endpoint.
     *
     * The async variant is {@see RegistrationServiceClient::deleteEndpointAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/delete_endpoint.php
     *
     * @param DeleteEndpointRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteEndpoint(DeleteEndpointRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteEndpoint', $request, $callOptions)->wait();
    }

    /**
     * Deletes a namespace. This also deletes all services and endpoints in
     * the namespace.
     *
     * The async variant is {@see RegistrationServiceClient::deleteNamespaceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/delete_namespace.php
     *
     * @param DeleteNamespaceRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteNamespace(DeleteNamespaceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteNamespace', $request, $callOptions)->wait();
    }

    /**
     * Deletes a service. This also deletes all endpoints associated with
     * the service.
     *
     * The async variant is {@see RegistrationServiceClient::deleteServiceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/delete_service.php
     *
     * @param DeleteServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteService(DeleteServiceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteService', $request, $callOptions)->wait();
    }

    /**
     * Gets an endpoint.
     *
     * The async variant is {@see RegistrationServiceClient::getEndpointAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/get_endpoint.php
     *
     * @param GetEndpointRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Endpoint
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEndpoint(GetEndpointRequest $request, array $callOptions = []): Endpoint
    {
        return $this->startApiCall('GetEndpoint', $request, $callOptions)->wait();
    }

    /**
     * Gets the IAM Policy for a resource (namespace or service only).
     *
     * The async variant is {@see RegistrationServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets a namespace.
     *
     * The async variant is {@see RegistrationServiceClient::getNamespaceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/get_namespace.php
     *
     * @param GetNamespaceRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBNamespace
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNamespace(GetNamespaceRequest $request, array $callOptions = []): PBNamespace
    {
        return $this->startApiCall('GetNamespace', $request, $callOptions)->wait();
    }

    /**
     * Gets a service.
     *
     * The async variant is {@see RegistrationServiceClient::getServiceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/get_service.php
     *
     * @param GetServiceRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getService(GetServiceRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('GetService', $request, $callOptions)->wait();
    }

    /**
     * Lists all endpoints.
     *
     * The async variant is {@see RegistrationServiceClient::listEndpointsAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/list_endpoints.php
     *
     * @param ListEndpointsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listEndpoints(ListEndpointsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListEndpoints', $request, $callOptions);
    }

    /**
     * Lists all namespaces.
     *
     * The async variant is {@see RegistrationServiceClient::listNamespacesAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/list_namespaces.php
     *
     * @param ListNamespacesRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listNamespaces(ListNamespacesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNamespaces', $request, $callOptions);
    }

    /**
     * Lists all services belonging to a namespace.
     *
     * The async variant is {@see RegistrationServiceClient::listServicesAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/list_services.php
     *
     * @param ListServicesRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listServices(ListServicesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListServices', $request, $callOptions);
    }

    /**
     * Sets the IAM Policy for a resource (namespace or service only).
     *
     * The async variant is {@see RegistrationServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Tests IAM permissions for a resource (namespace or service only).
     *
     * The async variant is {@see RegistrationServiceClient::testIamPermissionsAsync()}
     * .
     *
     * @example samples/V1/RegistrationServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates an endpoint.
     *
     * The async variant is {@see RegistrationServiceClient::updateEndpointAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/update_endpoint.php
     *
     * @param UpdateEndpointRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Endpoint
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateEndpoint(UpdateEndpointRequest $request, array $callOptions = []): Endpoint
    {
        return $this->startApiCall('UpdateEndpoint', $request, $callOptions)->wait();
    }

    /**
     * Updates a namespace.
     *
     * The async variant is {@see RegistrationServiceClient::updateNamespaceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/update_namespace.php
     *
     * @param UpdateNamespaceRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBNamespace
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateNamespace(UpdateNamespaceRequest $request, array $callOptions = []): PBNamespace
    {
        return $this->startApiCall('UpdateNamespace', $request, $callOptions)->wait();
    }

    /**
     * Updates a service.
     *
     * The async variant is {@see RegistrationServiceClient::updateServiceAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/update_service.php
     *
     * @param UpdateServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateService(UpdateServiceRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('UpdateService', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see RegistrationServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see RegistrationServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/RegistrationServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
