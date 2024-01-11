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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/conversation.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\CompleteConversationRequest;
use Google\Cloud\Dialogflow\V2\Conversation;
use Google\Cloud\Dialogflow\V2\CreateConversationRequest;
use Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryRequest;
use Google\Cloud\Dialogflow\V2\GenerateStatelessSummaryResponse;
use Google\Cloud\Dialogflow\V2\GetConversationRequest;
use Google\Cloud\Dialogflow\V2\ListConversationsRequest;
use Google\Cloud\Dialogflow\V2\ListMessagesRequest;
use Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest;
use Google\Cloud\Dialogflow\V2\SearchKnowledgeResponse;
use Google\Cloud\Dialogflow\V2\SuggestConversationSummaryRequest;
use Google\Cloud\Dialogflow\V2\SuggestConversationSummaryResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing
 * [Conversations][google.cloud.dialogflow.v2.Conversation].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface completeConversationAsync(CompleteConversationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createConversationAsync(CreateConversationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface generateStatelessSummaryAsync(GenerateStatelessSummaryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getConversationAsync(GetConversationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listConversationsAsync(ListConversationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listMessagesAsync(ListMessagesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchKnowledgeAsync(SearchKnowledgeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface suggestConversationSummaryAsync(SuggestConversationSummaryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class ConversationsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.Conversations';

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

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conversations_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conversations_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conversations_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/conversations_rest_client_config.php',
                ],
            ],
        ];
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
     * Formats a string containing the fully-qualified path to represent a
     * cx_security_settings resource.
     *
     * @param string $project
     * @param string $location
     * @param string $securitySettings
     *
     * @return string The formatted cx_security_settings resource.
     */
    public static function cXSecuritySettingsName(string $project, string $location, string $securitySettings): string
    {
        return self::getPathTemplate('cXSecuritySettings')->render([
            'project' => $project,
            'location' => $location,
            'security_settings' => $securitySettings,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a conversation
     * resource.
     *
     * @param string $project
     * @param string $conversation
     *
     * @return string The formatted conversation resource.
     */
    public static function conversationName(string $project, string $conversation): string
    {
        return self::getPathTemplate('conversation')->render([
            'project' => $project,
            'conversation' => $conversation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted conversation_model resource.
     */
    public static function conversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('conversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted conversation_profile resource.
     */
    public static function conversationProfileName(string $project, string $conversationProfile): string
    {
        return self::getPathTemplate('conversationProfile')->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a document
     * resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted document resource.
     */
    public static function documentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('document')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted knowledge_base resource.
     */
    public static function knowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('knowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
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
     * Formats a string containing the fully-qualified path to represent a message
     * resource.
     *
     * @param string $project
     * @param string $conversation
     * @param string $message
     *
     * @return string The formatted message resource.
     */
    public static function messageName(string $project, string $conversation, string $message): string
    {
        return self::getPathTemplate('message')->render([
            'project' => $project,
            'conversation' => $conversation,
            'message' => $message,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
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
     * project_conversation resource.
     *
     * @param string $project
     * @param string $conversation
     *
     * @return string The formatted project_conversation resource.
     */
    public static function projectConversationName(string $project, string $conversation): string
    {
        return self::getPathTemplate('projectConversation')->render([
            'project' => $project,
            'conversation' => $conversation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_message resource.
     *
     * @param string $project
     * @param string $conversation
     * @param string $message
     *
     * @return string The formatted project_conversation_message resource.
     */
    public static function projectConversationMessageName(string $project, string $conversation, string $message): string
    {
        return self::getPathTemplate('projectConversationMessage')->render([
            'project' => $project,
            'conversation' => $conversation,
            'message' => $message,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_model resource.
     *
     * @param string $project
     * @param string $conversationModel
     *
     * @return string The formatted project_conversation_model resource.
     */
    public static function projectConversationModelName(string $project, string $conversationModel): string
    {
        return self::getPathTemplate('projectConversationModel')->render([
            'project' => $project,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted project_conversation_profile resource.
     */
    public static function projectConversationProfileName(string $project, string $conversationProfile): string
    {
        return self::getPathTemplate('projectConversationProfile')->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted project_knowledge_base resource.
     */
    public static function projectKnowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectKnowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_knowledge_base_document resource.
     */
    public static function projectKnowledgeBaseDocumentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectKnowledgeBaseDocument')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
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
     * project_location_conversation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversation
     *
     * @return string The formatted project_location_conversation resource.
     */
    public static function projectLocationConversationName(string $project, string $location, string $conversation): string
    {
        return self::getPathTemplate('projectLocationConversation')->render([
            'project' => $project,
            'location' => $location,
            'conversation' => $conversation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_message resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversation
     * @param string $message
     *
     * @return string The formatted project_location_conversation_message resource.
     */
    public static function projectLocationConversationMessageName(string $project, string $location, string $conversation, string $message): string
    {
        return self::getPathTemplate('projectLocationConversationMessage')->render([
            'project' => $project,
            'location' => $location,
            'conversation' => $conversation,
            'message' => $message,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted project_location_conversation_model resource.
     */
    public static function projectLocationConversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('projectLocationConversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_profile resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationProfile
     *
     * @return string The formatted project_location_conversation_profile resource.
     */
    public static function projectLocationConversationProfileName(string $project, string $location, string $conversationProfile): string
    {
        return self::getPathTemplate('projectLocationConversationProfile')->render([
            'project' => $project,
            'location' => $location,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_knowledge_base resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     *
     * @return string The formatted project_location_knowledge_base resource.
     */
    public static function projectLocationKnowledgeBaseName(string $project, string $location, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBase')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_location_knowledge_base_document resource.
     */
    public static function projectLocationKnowledgeBaseDocumentName(string $project, string $location, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBaseDocument')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - cXSecuritySettings: projects/{project}/locations/{location}/securitySettings/{security_settings}
     * - conversation: projects/{project}/conversations/{conversation}
     * - conversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - conversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - document: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - knowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - location: projects/{project}/locations/{location}
     * - message: projects/{project}/conversations/{conversation}/messages/{message}
     * - project: projects/{project}
     * - projectAgent: projects/{project}/agent
     * - projectConversation: projects/{project}/conversations/{conversation}
     * - projectConversationMessage: projects/{project}/conversations/{conversation}/messages/{message}
     * - projectConversationModel: projects/{project}/conversationModels/{conversation_model}
     * - projectConversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - projectKnowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - projectKnowledgeBaseDocument: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationConversation: projects/{project}/locations/{location}/conversations/{conversation}
     * - projectLocationConversationMessage: projects/{project}/locations/{location}/conversations/{conversation}/messages/{message}
     * - projectLocationConversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - projectLocationConversationProfile: projects/{project}/locations/{location}/conversationProfiles/{conversation_profile}
     * - projectLocationKnowledgeBase: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}
     * - projectLocationKnowledgeBaseDocument: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}/documents/{document}
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
     * Completes the specified conversation. Finished conversations are purged
     * from the database after 30 days.
     *
     * The async variant is {@see ConversationsClient::completeConversationAsync()} .
     *
     * @example samples/V2/ConversationsClient/complete_conversation.php
     *
     * @param CompleteConversationRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Conversation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function completeConversation(CompleteConversationRequest $request, array $callOptions = []): Conversation
    {
        return $this->startApiCall('CompleteConversation', $request, $callOptions)->wait();
    }

    /**
     * Creates a new conversation. Conversations are auto-completed after 24
     * hours.
     *
     * Conversation Lifecycle:
     * There are two stages during a conversation: Automated Agent Stage and
     * Assist Stage.
     *
     * For Automated Agent Stage, there will be a dialogflow agent responding to
     * user queries.
     *
     * For Assist Stage, there's no dialogflow agent responding to user queries.
     * But we will provide suggestions which are generated from conversation.
     *
     * If
     * [Conversation.conversation_profile][google.cloud.dialogflow.v2.Conversation.conversation_profile]
     * is configured for a dialogflow agent, conversation will start from
     * `Automated Agent Stage`, otherwise, it will start from `Assist Stage`. And
     * during `Automated Agent Stage`, once an
     * [Intent][google.cloud.dialogflow.v2.Intent] with
     * [Intent.live_agent_handoff][google.cloud.dialogflow.v2.Intent.live_agent_handoff]
     * is triggered, conversation will transfer to Assist Stage.
     *
     * The async variant is {@see ConversationsClient::createConversationAsync()} .
     *
     * @example samples/V2/ConversationsClient/create_conversation.php
     *
     * @param CreateConversationRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Conversation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConversation(CreateConversationRequest $request, array $callOptions = []): Conversation
    {
        return $this->startApiCall('CreateConversation', $request, $callOptions)->wait();
    }

    /**
     * Generates and returns a summary for a conversation that does not have a
     * resource created for it.
     *
     * The async variant is {@see ConversationsClient::generateStatelessSummaryAsync()}
     * .
     *
     * @example samples/V2/ConversationsClient/generate_stateless_summary.php
     *
     * @param GenerateStatelessSummaryRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GenerateStatelessSummaryResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function generateStatelessSummary(GenerateStatelessSummaryRequest $request, array $callOptions = []): GenerateStatelessSummaryResponse
    {
        return $this->startApiCall('GenerateStatelessSummary', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specific conversation.
     *
     * The async variant is {@see ConversationsClient::getConversationAsync()} .
     *
     * @example samples/V2/ConversationsClient/get_conversation.php
     *
     * @param GetConversationRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Conversation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConversation(GetConversationRequest $request, array $callOptions = []): Conversation
    {
        return $this->startApiCall('GetConversation', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all conversations in the specified project.
     *
     * The async variant is {@see ConversationsClient::listConversationsAsync()} .
     *
     * @example samples/V2/ConversationsClient/list_conversations.php
     *
     * @param ListConversationsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listConversations(ListConversationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConversations', $request, $callOptions);
    }

    /**
     * Lists messages that belong to a given conversation.
     * `messages` are ordered by `create_time` in descending order. To fetch
     * updates without duplication, send request with filter
     * `create_time_epoch_microseconds >
     * [first item's create_time of previous request]` and empty page_token.
     *
     * The async variant is {@see ConversationsClient::listMessagesAsync()} .
     *
     * @example samples/V2/ConversationsClient/list_messages.php
     *
     * @param ListMessagesRequest $request     A request to house fields associated with the call.
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
    public function listMessages(ListMessagesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListMessages', $request, $callOptions);
    }

    /**
     * Get answers for the given query based on knowledge documents.
     *
     * The async variant is {@see ConversationsClient::searchKnowledgeAsync()} .
     *
     * @example samples/V2/ConversationsClient/search_knowledge.php
     *
     * @param SearchKnowledgeRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SearchKnowledgeResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchKnowledge(SearchKnowledgeRequest $request, array $callOptions = []): SearchKnowledgeResponse
    {
        return $this->startApiCall('SearchKnowledge', $request, $callOptions)->wait();
    }

    /**
     * Suggests summary for a conversation based on specific historical messages.
     * The range of the messages to be used for summary can be specified in the
     * request.
     *
     * The async variant is
     * {@see ConversationsClient::suggestConversationSummaryAsync()} .
     *
     * @example samples/V2/ConversationsClient/suggest_conversation_summary.php
     *
     * @param SuggestConversationSummaryRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SuggestConversationSummaryResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function suggestConversationSummary(SuggestConversationSummaryRequest $request, array $callOptions = []): SuggestConversationSummaryResponse
    {
        return $this->startApiCall('SuggestConversationSummary', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ConversationsClient::getLocationAsync()} .
     *
     * @example samples/V2/ConversationsClient/get_location.php
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
     * The async variant is {@see ConversationsClient::listLocationsAsync()} .
     *
     * @example samples/V2/ConversationsClient/list_locations.php
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
