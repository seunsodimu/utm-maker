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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/intent.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\BatchDeleteIntentsRequest;
use Google\Cloud\Dialogflow\V2\BatchUpdateIntentsRequest;
use Google\Cloud\Dialogflow\V2\BatchUpdateIntentsResponse;
use Google\Cloud\Dialogflow\V2\CreateIntentRequest;
use Google\Cloud\Dialogflow\V2\DeleteIntentRequest;
use Google\Cloud\Dialogflow\V2\GetIntentRequest;
use Google\Cloud\Dialogflow\V2\Intent;
use Google\Cloud\Dialogflow\V2\ListIntentsRequest;
use Google\Cloud\Dialogflow\V2\UpdateIntentRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use Google\Protobuf\Struct;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing [Intents][google.cloud.dialogflow.v2.Intent].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface batchDeleteIntentsAsync(BatchDeleteIntentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchUpdateIntentsAsync(BatchUpdateIntentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createIntentAsync(CreateIntentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteIntentAsync(DeleteIntentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIntentAsync(GetIntentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listIntentsAsync(ListIntentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateIntentAsync(UpdateIntentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class IntentsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.Intents';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/intents_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/intents_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/intents_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/intents_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a context
     * resource.
     *
     * @param string $project
     * @param string $session
     * @param string $context
     *
     * @return string The formatted context resource.
     */
    public static function contextName(string $project, string $session, string $context): string
    {
        return self::getPathTemplate('context')->render([
            'project' => $project,
            'session' => $session,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a intent
     * resource.
     *
     * @param string $project
     * @param string $intent
     *
     * @return string The formatted intent resource.
     */
    public static function intentName(string $project, string $intent): string
    {
        return self::getPathTemplate('intent')->render([
            'project' => $project,
            'intent' => $intent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName(string $project): string
    {
        return self::getPathTemplate('projectAgent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_environment_user_session resource.
     *
     * @param string $project
     * @param string $environment
     * @param string $user
     * @param string $session
     *
     * @return string The formatted project_environment_user_session resource.
     */
    public static function projectEnvironmentUserSessionName(string $project, string $environment, string $user, string $session): string
    {
        return self::getPathTemplate('projectEnvironmentUserSession')->render([
            'project' => $project,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_environment_user_session_context resource.
     *
     * @param string $project
     * @param string $environment
     * @param string $user
     * @param string $session
     * @param string $context
     *
     * @return string The formatted project_environment_user_session_context resource.
     */
    public static function projectEnvironmentUserSessionContextName(string $project, string $environment, string $user, string $session, string $context): string
    {
        return self::getPathTemplate('projectEnvironmentUserSessionContext')->render([
            'project' => $project,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_intent resource.
     *
     * @param string $project
     * @param string $intent
     *
     * @return string The formatted project_intent resource.
     */
    public static function projectIntentName(string $project, string $intent): string
    {
        return self::getPathTemplate('projectIntent')->render([
            'project' => $project,
            'intent' => $intent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationAgent')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_environment_user_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $environment
     * @param string $user
     * @param string $session
     *
     * @return string The formatted project_location_environment_user_session resource.
     */
    public static function projectLocationEnvironmentUserSessionName(string $project, string $location, string $environment, string $user, string $session): string
    {
        return self::getPathTemplate('projectLocationEnvironmentUserSession')->render([
            'project' => $project,
            'location' => $location,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_environment_user_session_context resource.
     *
     * @param string $project
     * @param string $location
     * @param string $environment
     * @param string $user
     * @param string $session
     * @param string $context
     *
     * @return string The formatted project_location_environment_user_session_context resource.
     */
    public static function projectLocationEnvironmentUserSessionContextName(string $project, string $location, string $environment, string $user, string $session, string $context): string
    {
        return self::getPathTemplate('projectLocationEnvironmentUserSessionContext')->render([
            'project' => $project,
            'location' => $location,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_intent resource.
     *
     * @param string $project
     * @param string $location
     * @param string $intent
     *
     * @return string The formatted project_location_intent resource.
     */
    public static function projectLocationIntentName(string $project, string $location, string $intent): string
    {
        return self::getPathTemplate('projectLocationIntent')->render([
            'project' => $project,
            'location' => $location,
            'intent' => $intent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     *
     * @return string The formatted project_location_session resource.
     */
    public static function projectLocationSessionName(string $project, string $location, string $session): string
    {
        return self::getPathTemplate('projectLocationSession')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_session_context resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     * @param string $context
     *
     * @return string The formatted project_location_session_context resource.
     */
    public static function projectLocationSessionContextName(string $project, string $location, string $session, string $context): string
    {
        return self::getPathTemplate('projectLocationSessionContext')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_session resource.
     *
     * @param string $project
     * @param string $session
     *
     * @return string The formatted project_session resource.
     */
    public static function projectSessionName(string $project, string $session): string
    {
        return self::getPathTemplate('projectSession')->render([
            'project' => $project,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_session_context resource.
     *
     * @param string $project
     * @param string $session
     * @param string $context
     *
     * @return string The formatted project_session_context resource.
     */
    public static function projectSessionContextName(string $project, string $session, string $context): string
    {
        return self::getPathTemplate('projectSessionContext')->render([
            'project' => $project,
            'session' => $session,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a session
     * resource.
     *
     * @param string $project
     * @param string $session
     *
     * @return string The formatted session resource.
     */
    public static function sessionName(string $project, string $session): string
    {
        return self::getPathTemplate('session')->render([
            'project' => $project,
            'session' => $session,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - context: projects/{project}/agent/sessions/{session}/contexts/{context}
     * - intent: projects/{project}/agent/intents/{intent}
     * - projectAgent: projects/{project}/agent
     * - projectEnvironmentUserSession: projects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}
     * - projectEnvironmentUserSessionContext: projects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}/contexts/{context}
     * - projectIntent: projects/{project}/agent/intents/{intent}
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationEnvironmentUserSession: projects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}
     * - projectLocationEnvironmentUserSessionContext: projects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}/contexts/{context}
     * - projectLocationIntent: projects/{project}/locations/{location}/agent/intents/{intent}
     * - projectLocationSession: projects/{project}/locations/{location}/agent/sessions/{session}
     * - projectLocationSessionContext: projects/{project}/locations/{location}/agent/sessions/{session}/contexts/{context}
     * - projectSession: projects/{project}/agent/sessions/{session}
     * - projectSessionContext: projects/{project}/agent/sessions/{session}/contexts/{context}
     * - session: projects/{project}/agent/sessions/{session}
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
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
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
     * Deletes intents in the specified agent.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see IntentsClient::batchDeleteIntentsAsync()} .
     *
     * @example samples/V2/IntentsClient/batch_delete_intents.php
     *
     * @param BatchDeleteIntentsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchDeleteIntents(BatchDeleteIntentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchDeleteIntents', $request, $callOptions)->wait();
    }

    /**
     * Updates/Creates multiple intents in the specified agent.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`:
     * [BatchUpdateIntentsResponse][google.cloud.dialogflow.v2.BatchUpdateIntentsResponse]
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see IntentsClient::batchUpdateIntentsAsync()} .
     *
     * @example samples/V2/IntentsClient/batch_update_intents.php
     *
     * @param BatchUpdateIntentsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchUpdateIntents(BatchUpdateIntentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchUpdateIntents', $request, $callOptions)->wait();
    }

    /**
     * Creates an intent in the specified agent.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see IntentsClient::createIntentAsync()} .
     *
     * @example samples/V2/IntentsClient/create_intent.php
     *
     * @param CreateIntentRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Intent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createIntent(CreateIntentRequest $request, array $callOptions = []): Intent
    {
        return $this->startApiCall('CreateIntent', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified intent and its direct or indirect followup intents.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see IntentsClient::deleteIntentAsync()} .
     *
     * @example samples/V2/IntentsClient/delete_intent.php
     *
     * @param DeleteIntentRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function deleteIntent(DeleteIntentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteIntent', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified intent.
     *
     * The async variant is {@see IntentsClient::getIntentAsync()} .
     *
     * @example samples/V2/IntentsClient/get_intent.php
     *
     * @param GetIntentRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Intent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIntent(GetIntentRequest $request, array $callOptions = []): Intent
    {
        return $this->startApiCall('GetIntent', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all intents in the specified agent.
     *
     * The async variant is {@see IntentsClient::listIntentsAsync()} .
     *
     * @example samples/V2/IntentsClient/list_intents.php
     *
     * @param ListIntentsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function listIntents(ListIntentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListIntents', $request, $callOptions);
    }

    /**
     * Updates the specified intent.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see IntentsClient::updateIntentAsync()} .
     *
     * @example samples/V2/IntentsClient/update_intent.php
     *
     * @param UpdateIntentRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Intent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateIntent(UpdateIntentRequest $request, array $callOptions = []): Intent
    {
        return $this->startApiCall('UpdateIntent', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see IntentsClient::getLocationAsync()} .
     *
     * @example samples/V2/IntentsClient/get_location.php
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
     * The async variant is {@see IntentsClient::listLocationsAsync()} .
     *
     * @example samples/V2/IntentsClient/list_locations.php
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
