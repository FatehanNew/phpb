<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fatehan\Service;

/**
 * ApiService provides core API operations for authentication, device management, events, and notifications.
 */
class ApiServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Authenticate a user and return auth tokens and profile data.
     * @param \Fatehan\Service\AuthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AuthResponse>
     */
    public function Authentication(\Fatehan\Service\AuthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/Authentication',
        $argument,
        ['\Fatehan\Service\AuthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Return the current authenticated user profile and related data.
     * @param \Fatehan\Service\MeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\MeResponse>
     */
    public function MeIndex(\Fatehan\Service\MeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/MeIndex',
        $argument,
        ['\Fatehan\Service\MeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List available areas and related metadata.
     * @param \Fatehan\Service\AreaIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AreaIndexResponse>
     */
    public function AreaIndex(\Fatehan\Service\AreaIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/AreaIndex',
        $argument,
        ['\Fatehan\Service\AreaIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List devices for the current account.
     * @param \Fatehan\Service\DeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DeviceResponse>
     */
    public function DeviceIndex(\Fatehan\Service\DeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DeviceIndex',
        $argument,
        ['\Fatehan\Service\DeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Show detailed information for a single device.
     * @param \Fatehan\Service\DeviceShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DeviceShowResponse>
     */
    public function DeviceShow(\Fatehan\Service\DeviceShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DeviceShow',
        $argument,
        ['\Fatehan\Service\DeviceShowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Fetch configuration values used by clients.
     * @param \Fatehan\Service\ConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\ConfigResponse>
     */
    public function ConfigIndex(\Fatehan\Service\ConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/ConfigIndex',
        $argument,
        ['\Fatehan\Service\ConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List users with optional filters and pagination.
     * @param \Fatehan\Service\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\UserResponse>
     */
    public function UserIndex(\Fatehan\Service\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/UserIndex',
        $argument,
        ['\Fatehan\Service\UserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List IO (input/output) entities for devices.
     * @param \Fatehan\Service\IoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\IoResponse>
     */
    public function IoIndex(\Fatehan\Service\IoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/IoIndex',
        $argument,
        ['\Fatehan\Service\IoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List maintenance records or tasks.
     * @param \Fatehan\Service\MaintenanceIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\MaintenanceIndexResponse>
     */
    public function MaintenanceIndex(\Fatehan\Service\MaintenanceIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/MaintenanceIndex',
        $argument,
        ['\Fatehan\Service\MaintenanceIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List available subscription methods and related metadata.
     * @param \Fatehan\Service\SubscriptionMethodIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\Repositories\SubscriptionRepo>
     */
    public function SubscriptionMethodIndex(\Fatehan\Service\SubscriptionMethodIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/SubscriptionMethodIndex',
        $argument,
        ['\Fatehan\Service\Repositories\SubscriptionRepo', 'decode'],
        $metadata, $options);
    }

    /**
     * List available event templates.
     * @param \Fatehan\Service\EventTemplateIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\EventTemplateIndexResponse>
     */
    public function EventTemplateIndex(\Fatehan\Service\EventTemplateIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventTemplateIndex',
        $argument,
        ['\Fatehan\Service\EventTemplateIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new event template.
     * @param \Fatehan\Notify\EventTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\EventTemplate>
     */
    public function EventTemplateStore(\Fatehan\Notify\EventTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventTemplateStore',
        $argument,
        ['\Fatehan\Notify\EventTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing event template.
     * @param \Fatehan\Notify\EventTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\EventTemplate>
     */
    public function EventTemplateUpdate(\Fatehan\Notify\EventTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventTemplateUpdate',
        $argument,
        ['\Fatehan\Notify\EventTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an existing event template by id.
     * @param \Fatehan\Service\EventTemplateDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\EventTemplateDestroyResponse>
     */
    public function EventTemplateDestroy(\Fatehan\Service\EventTemplateDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventTemplateDestroy',
        $argument,
        ['\Fatehan\Service\EventTemplateDestroyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Show details of a single event template.
     * @param \Fatehan\Service\EventTemplateShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\EventTemplate>
     */
    public function EventTemplateShow(\Fatehan\Service\EventTemplateShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventTemplateShow',
        $argument,
        ['\Fatehan\Notify\EventTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new event.
     * @param \Fatehan\Notify\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\Event>
     */
    public function EventStore(\Fatehan\Notify\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventStore',
        $argument,
        ['\Fatehan\Notify\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing event.
     * @param \Fatehan\Notify\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\Event>
     */
    public function EventUpdate(\Fatehan\Notify\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventUpdate',
        $argument,
        ['\Fatehan\Notify\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an event by id.
     * @param \Fatehan\Service\EventDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\EventDestroyResponse>
     */
    public function EventDestroy(\Fatehan\Service\EventDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventDestroy',
        $argument,
        ['\Fatehan\Service\EventDestroyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List events with filters and pagination.
     * @param \Fatehan\Service\EventIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\EventIndexResponse>
     */
    public function EventIndex(\Fatehan\Service\EventIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventIndex',
        $argument,
        ['\Fatehan\Service\EventIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Show details of a single event.
     * @param \Fatehan\Service\EventShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\Event>
     */
    public function EventShow(\Fatehan\Service\EventShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/EventShow',
        $argument,
        ['\Fatehan\Notify\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Index List available command actions.
     * @param \Fatehan\Service\CommandActionIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\CommandActionIndexResponse>
     */
    public function CommandActionIndex(\Fatehan\Service\CommandActionIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/CommandActionIndex',
        $argument,
        ['\Fatehan\Service\CommandActionIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Show details of a single command action
     * @param \Fatehan\Service\CommandActionShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Device\CommandAction>
     */
    public function CommandActionShow(\Fatehan\Service\CommandActionShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/CommandActionShow',
        $argument,
        ['\Fatehan\Device\CommandAction', 'decode'],
        $metadata, $options);
    }

    /**
     * List available command  actions.
     * @param \Fatehan\Service\CommandActionListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\CommandActionListResponse>
     */
    public function CommandActionList(\Fatehan\Service\CommandActionListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/CommandActionList',
        $argument,
        ['\Fatehan\Service\CommandActionListResponse', 'decode'],
        $metadata, $options);
    }

}
