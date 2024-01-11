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
 * https://github.com/googleapis/googleapis/blob/master/google/storagetransfer/v1/transfer.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\StorageTransfer\V1\Client;

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
use Google\Cloud\StorageTransfer\V1\AgentPool;
use Google\Cloud\StorageTransfer\V1\CreateAgentPoolRequest;
use Google\Cloud\StorageTransfer\V1\CreateTransferJobRequest;
use Google\Cloud\StorageTransfer\V1\DeleteAgentPoolRequest;
use Google\Cloud\StorageTransfer\V1\DeleteTransferJobRequest;
use Google\Cloud\StorageTransfer\V1\GetAgentPoolRequest;
use Google\Cloud\StorageTransfer\V1\GetGoogleServiceAccountRequest;
use Google\Cloud\StorageTransfer\V1\GetTransferJobRequest;
use Google\Cloud\StorageTransfer\V1\GoogleServiceAccount;
use Google\Cloud\StorageTransfer\V1\ListAgentPoolsRequest;
use Google\Cloud\StorageTransfer\V1\ListTransferJobsRequest;
use Google\Cloud\StorageTransfer\V1\PauseTransferOperationRequest;
use Google\Cloud\StorageTransfer\V1\ResumeTransferOperationRequest;
use Google\Cloud\StorageTransfer\V1\RunTransferJobRequest;
use Google\Cloud\StorageTransfer\V1\TransferJob;
use Google\Cloud\StorageTransfer\V1\TransferOperation;
use Google\Cloud\StorageTransfer\V1\UpdateAgentPoolRequest;
use Google\Cloud\StorageTransfer\V1\UpdateTransferJobRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Storage Transfer Service and its protos.
 * Transfers data between between Google Cloud Storage buckets or from a data
 * source external to Google to a Cloud Storage bucket.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createAgentPoolAsync(CreateAgentPoolRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createTransferJobAsync(CreateTransferJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAgentPoolAsync(DeleteAgentPoolRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteTransferJobAsync(DeleteTransferJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAgentPoolAsync(GetAgentPoolRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getGoogleServiceAccountAsync(GetGoogleServiceAccountRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTransferJobAsync(GetTransferJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAgentPoolsAsync(ListAgentPoolsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTransferJobsAsync(ListTransferJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface pauseTransferOperationAsync(PauseTransferOperationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface resumeTransferOperationAsync(ResumeTransferOperationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runTransferJobAsync(RunTransferJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateAgentPoolAsync(UpdateAgentPoolRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateTransferJobAsync(UpdateTransferJobRequest $request, array $optionalArgs = [])
 */
final class StorageTransferServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.storagetransfer.v1.StorageTransferService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'storagetransfer.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'storagetransfer.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/storage_transfer_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/storage_transfer_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/storage_transfer_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/storage_transfer_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a agent_pools
     * resource.
     *
     * @param string $projectId
     * @param string $agentPoolId
     *
     * @return string The formatted agent_pools resource.
     */
    public static function agentPoolsName(string $projectId, string $agentPoolId): string
    {
        return self::getPathTemplate('agentPools')->render([
            'project_id' => $projectId,
            'agent_pool_id' => $agentPoolId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agentPools: projects/{project_id}/agentPools/{agent_pool_id}
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
     *           as "<uri>:<port>". Default 'storagetransfer.googleapis.com:443'.
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
     * Creates an agent pool resource.
     *
     * The async variant is {@see StorageTransferServiceClient::createAgentPoolAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/create_agent_pool.php
     *
     * @param CreateAgentPoolRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AgentPool
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createAgentPool(CreateAgentPoolRequest $request, array $callOptions = []): AgentPool
    {
        return $this->startApiCall('CreateAgentPool', $request, $callOptions)->wait();
    }

    /**
     * Creates a transfer job that runs periodically.
     *
     * The async variant is
     * {@see StorageTransferServiceClient::createTransferJobAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/create_transfer_job.php
     *
     * @param CreateTransferJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransferJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTransferJob(CreateTransferJobRequest $request, array $callOptions = []): TransferJob
    {
        return $this->startApiCall('CreateTransferJob', $request, $callOptions)->wait();
    }

    /**
     * Deletes an agent pool.
     *
     * The async variant is {@see StorageTransferServiceClient::deleteAgentPoolAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/delete_agent_pool.php
     *
     * @param DeleteAgentPoolRequest $request     A request to house fields associated with the call.
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
    public function deleteAgentPool(DeleteAgentPoolRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAgentPool', $request, $callOptions)->wait();
    }

    /**
     * Deletes a transfer job. Deleting a transfer job sets its status to
     * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED].
     *
     * The async variant is
     * {@see StorageTransferServiceClient::deleteTransferJobAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/delete_transfer_job.php
     *
     * @param DeleteTransferJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function deleteTransferJob(DeleteTransferJobRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteTransferJob', $request, $callOptions)->wait();
    }

    /**
     * Gets an agent pool.
     *
     * The async variant is {@see StorageTransferServiceClient::getAgentPoolAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/get_agent_pool.php
     *
     * @param GetAgentPoolRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AgentPool
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAgentPool(GetAgentPoolRequest $request, array $callOptions = []): AgentPool
    {
        return $this->startApiCall('GetAgentPool', $request, $callOptions)->wait();
    }

    /**
     * Returns the Google service account that is used by Storage Transfer
     * Service to access buckets in the project where transfers
     * run or in other projects. Each Google service account is associated
     * with one Google Cloud project. Users
     * should add this service account to the Google Cloud Storage bucket
     * ACLs to grant access to Storage Transfer Service. This service
     * account is created and owned by Storage Transfer Service and can
     * only be used by Storage Transfer Service.
     *
     * The async variant is
     * {@see StorageTransferServiceClient::getGoogleServiceAccountAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/get_google_service_account.php
     *
     * @param GetGoogleServiceAccountRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GoogleServiceAccount
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getGoogleServiceAccount(GetGoogleServiceAccountRequest $request, array $callOptions = []): GoogleServiceAccount
    {
        return $this->startApiCall('GetGoogleServiceAccount', $request, $callOptions)->wait();
    }

    /**
     * Gets a transfer job.
     *
     * The async variant is {@see StorageTransferServiceClient::getTransferJobAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/get_transfer_job.php
     *
     * @param GetTransferJobRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransferJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTransferJob(GetTransferJobRequest $request, array $callOptions = []): TransferJob
    {
        return $this->startApiCall('GetTransferJob', $request, $callOptions)->wait();
    }

    /**
     * Lists agent pools.
     *
     * The async variant is {@see StorageTransferServiceClient::listAgentPoolsAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/list_agent_pools.php
     *
     * @param ListAgentPoolsRequest $request     A request to house fields associated with the call.
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
    public function listAgentPools(ListAgentPoolsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAgentPools', $request, $callOptions);
    }

    /**
     * Lists transfer jobs.
     *
     * The async variant is
     * {@see StorageTransferServiceClient::listTransferJobsAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/list_transfer_jobs.php
     *
     * @param ListTransferJobsRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function listTransferJobs(ListTransferJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTransferJobs', $request, $callOptions);
    }

    /**
     * Pauses a transfer operation.
     *
     * The async variant is
     * {@see StorageTransferServiceClient::pauseTransferOperationAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/pause_transfer_operation.php
     *
     * @param PauseTransferOperationRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function pauseTransferOperation(PauseTransferOperationRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('PauseTransferOperation', $request, $callOptions)->wait();
    }

    /**
     * Resumes a transfer operation that is paused.
     *
     * The async variant is
     * {@see StorageTransferServiceClient::resumeTransferOperationAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/resume_transfer_operation.php
     *
     * @param ResumeTransferOperationRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
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
    public function resumeTransferOperation(ResumeTransferOperationRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('ResumeTransferOperation', $request, $callOptions)->wait();
    }

    /**
     * Starts a new operation for the specified transfer job.
     * A `TransferJob` has a maximum of one active `TransferOperation`. If this
     * method is called while a `TransferOperation` is active, an error is
     * returned.
     *
     * The async variant is {@see StorageTransferServiceClient::runTransferJobAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/run_transfer_job.php
     *
     * @param RunTransferJobRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function runTransferJob(RunTransferJobRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RunTransferJob', $request, $callOptions)->wait();
    }

    /**
     * Updates an existing agent pool resource.
     *
     * The async variant is {@see StorageTransferServiceClient::updateAgentPoolAsync()}
     * .
     *
     * @example samples/V1/StorageTransferServiceClient/update_agent_pool.php
     *
     * @param UpdateAgentPoolRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AgentPool
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateAgentPool(UpdateAgentPoolRequest $request, array $callOptions = []): AgentPool
    {
        return $this->startApiCall('UpdateAgentPool', $request, $callOptions)->wait();
    }

    /**
     * Updates a transfer job. Updating a job's transfer spec does not affect
     * transfer operations that are running already.
     *
     * **Note:** The job's [status][google.storagetransfer.v1.TransferJob.status]
     * field can be modified using this RPC (for example, to set a job's status to
     * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED],
     * [DISABLED][google.storagetransfer.v1.TransferJob.Status.DISABLED], or
     * [ENABLED][google.storagetransfer.v1.TransferJob.Status.ENABLED]).
     *
     * The async variant is
     * {@see StorageTransferServiceClient::updateTransferJobAsync()} .
     *
     * @example samples/V1/StorageTransferServiceClient/update_transfer_job.php
     *
     * @param UpdateTransferJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransferJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTransferJob(UpdateTransferJobRequest $request, array $callOptions = []): TransferJob
    {
        return $this->startApiCall('UpdateTransferJob', $request, $callOptions)->wait();
    }
}
