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

    /**
     * global (maybe)
     * @param \Fatehan\Service\TraffixRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TraffixResponse>
     */
    public function TraffixReport(\Fatehan\Service\TraffixRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TraffixReport',
        $argument,
        ['\Fatehan\Service\TraffixResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a summary review report of areas with traffic details.
     * @param \Fatehan\Service\AreaSummaryReviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AreaSummaryReviewResponse>
     */
    public function AreaSummaryReviewReport(\Fatehan\Service\AreaSummaryReviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/AreaSummaryReviewReport',
        $argument,
        ['\Fatehan\Service\AreaSummaryReviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a trip report for specified devices and time range.
     * @param \Fatehan\Service\AreaSplitterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AreaSplitterResponse>
     */
    public function AreaSplitterReport(\Fatehan\Service\AreaSplitterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/AreaSplitterReport',
        $argument,
        ['\Fatehan\Service\AreaSplitterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a log report based on the provided request parameters.
     * @param \Fatehan\Service\LogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\LogResponse>
     */
    public function LogReport(\Fatehan\Service\LogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/LogReport',
        $argument,
        ['\Fatehan\Service\LogResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Short report generation methods
     * @param \Fatehan\Service\ShiftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\ShiftResponse>
     */
    public function ShiftReport(\Fatehan\Service\ShiftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/ShiftReport',
        $argument,
        ['\Fatehan\Service\ShiftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Detailed report generation methods
     * @param \Fatehan\Service\TripsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TripsResponse>
     */
    public function TripsReport(\Fatehan\Service\TripsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TripsReport',
        $argument,
        ['\Fatehan\Service\TripsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * The traffic report generation method
     * @param \Fatehan\Service\TrafficRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TrafficResponse>
     */
    public function TrafficReport(\Fatehan\Service\TrafficRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TrafficReport',
        $argument,
        ['\Fatehan\Service\TrafficResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Attendance report generation methods
     * @param \Fatehan\Service\AttendanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AttendanceResponse>
     */
    public function AttendanceReport(\Fatehan\Service\AttendanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/AttendanceReport',
        $argument,
        ['\Fatehan\Service\AttendanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Extended attendance report generation method
     * @param \Fatehan\Service\AttendanceXRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\AttendanceResponse>
     */
    public function AttendanceXReport(\Fatehan\Service\AttendanceXRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/AttendanceXReport',
        $argument,
        ['\Fatehan\Service\AttendanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Daily traffic report generation method
     * @param \Fatehan\Service\DailyTrafficRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DailyTrafficResponse>
     */
    public function DailyTrafficReport(\Fatehan\Service\DailyTrafficRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DailyTrafficReport',
        $argument,
        ['\Fatehan\Service\DailyTrafficResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Trip summary report generation method
     * @param \Fatehan\Service\TripsSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TripsSummaryResponse>
     */
    public function TripsSummaryReport(\Fatehan\Service\TripsSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TripsSummaryReport',
        $argument,
        ['\Fatehan\Service\TripsSummaryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Shift summary report generation method
     * @param \Fatehan\Service\ShiftSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\ShiftSummaryResponse>
     */
    public function ShiftSummaryReport(\Fatehan\Service\ShiftSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/ShiftSummaryReport',
        $argument,
        ['\Fatehan\Service\ShiftSummaryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Work cycle report generation method
     * @param \Fatehan\Service\WorkCycleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\WorkCycleResponse>
     */
    public function WorkCycleReport(\Fatehan\Service\WorkCycleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkCycleReport',
        $argument,
        ['\Fatehan\Service\WorkCycleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * odyssey
     * Trip report generation method
     * @param \Fatehan\Service\TripReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TripReportResponse>
     */
    public function TripReport(\Fatehan\Service\TripReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TripReport',
        $argument,
        ['\Fatehan\Service\TripReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Device data report generation method
     * @param \Fatehan\Service\DeviceDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DeviceDataResponse>
     */
    public function DeviceDataReport(\Fatehan\Service\DeviceDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DeviceDataReport',
        $argument,
        ['\Fatehan\Service\DeviceDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Route review report generation method
     * @param \Fatehan\Service\RouteReviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\RouteReviewResponse>
     */
    public function RouteReviewReport(\Fatehan\Service\RouteReviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/RouteReviewReport',
        $argument,
        ['\Fatehan\Service\RouteReviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Traffix report generation method
     * @param \Fatehan\Service\TripPerformanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\TripPerformanceResponse>
     */
    public function TripPerformanceReport(\Fatehan\Service\TripPerformanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/TripPerformanceReport',
        $argument,
        ['\Fatehan\Service\TripPerformanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Dashboard individual report generation method
     * @param \Fatehan\Service\DashboardIndividualRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DashboardIndividualResponse>
     */
    public function DashboardIndividual(\Fatehan\Service\DashboardIndividualRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DashboardIndividual',
        $argument,
        ['\Fatehan\Service\DashboardIndividualResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Route stop report generation method
     * @param \Fatehan\Service\RouteStopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\RouteStopResponse>
     */
    public function RouteStopReport(\Fatehan\Service\RouteStopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/RouteStopReport',
        $argument,
        ['\Fatehan\Service\RouteStopResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Command history report generation method
     * @param \Fatehan\Service\CommandHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\CommandHistoryResponse>
     */
    public function CommandHistoryReport(\Fatehan\Service\CommandHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/CommandHistoryReport',
        $argument,
        ['\Fatehan\Service\CommandHistoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Chart report generation method
     * @param \Fatehan\Service\ChartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\ChartResponse>
     */
    public function ChartReport(\Fatehan\Service\ChartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/ChartReport',
        $argument,
        ['\Fatehan\Service\ChartResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Workflow report generation method
     * @param \Fatehan\Service\WorkflowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\WorkflowResponse>
     */
    public function WorkflowReport(\Fatehan\Service\WorkflowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkflowReport',
        $argument,
        ['\Fatehan\Service\WorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Driver behavior report generation method
     * @param \Fatehan\Service\DriverBehaviorReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Service\DriverBehaviorReportResponse>
     */
    public function DriverBehaviorReport(\Fatehan\Service\DriverBehaviorReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/DriverBehaviorReport',
        $argument,
        ['\Fatehan\Service\DriverBehaviorReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Group Command Create
     * @param \Fatehan\Packet\Message\GroupCommandCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Packet\Message\GroupCommand>
     */
    public function GroupCommandCreate(\Fatehan\Packet\Message\GroupCommandCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/GroupCommandCreate',
        $argument,
        ['\Fatehan\Packet\Message\GroupCommand', 'decode'],
        $metadata, $options);
    }

    /**
     * Group Command Show 
     * @param \Fatehan\Packet\Message\GroupCommandShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Packet\Message\GroupCommand>
     */
    public function GroupCommandShow(\Fatehan\Packet\Message\GroupCommandShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/GroupCommandShow',
        $argument,
        ['\Fatehan\Packet\Message\GroupCommand', 'decode'],
        $metadata, $options);
    }

    /**
     * Group Command List 
     * @param \Fatehan\Packet\Message\GroupCommandListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Packet\Message\GroupCommandListResponse>
     */
    public function GroupCommandList(\Fatehan\Packet\Message\GroupCommandListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/GroupCommandList',
        $argument,
        ['\Fatehan\Packet\Message\GroupCommandListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Template Index
     * @param \Fatehan\Activities\WorkShift\WorkShiftTemplateIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftTemplateIndexResponse>
     */
    public function WorkShiftTemplateIndex(\Fatehan\Activities\WorkShift\WorkShiftTemplateIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftTemplateIndex',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftTemplateIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Template Show
     * @param \Fatehan\Activities\WorkShift\WorkShiftTemplateShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftTemplate>
     */
    public function WorkShiftTemplateShow(\Fatehan\Activities\WorkShift\WorkShiftTemplateShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftTemplateShow',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Template Store
     * @param \Fatehan\Activities\WorkShift\WorkShiftTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftTemplate>
     */
    public function WorkShiftTemplateStore(\Fatehan\Activities\WorkShift\WorkShiftTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftTemplateStore',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Template Update
     * @param \Fatehan\Activities\WorkShift\WorkShiftTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftTemplate>
     */
    public function WorkShiftTemplateUpdate(\Fatehan\Activities\WorkShift\WorkShiftTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftTemplateUpdate',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Template Destroy
     * @param \Fatehan\Activities\WorkShift\WorkShiftTemplateDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftTemplateDestroyResponse>
     */
    public function WorkShiftTemplateDestroy(\Fatehan\Activities\WorkShift\WorkShiftTemplateDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftTemplateDestroy',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftTemplateDestroyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Index
     * @param \Fatehan\Activities\WorkShift\WorkShiftIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftIndexResponse>
     */
    public function WorkShiftIndex(\Fatehan\Activities\WorkShift\WorkShiftIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftIndex',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Show
     * @param \Fatehan\Activities\WorkShift\WorkShiftShowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShift>
     */
    public function WorkShiftShow(\Fatehan\Activities\WorkShift\WorkShiftShowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftShow',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShift', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Store
     * @param \Fatehan\Activities\WorkShift\WorkShift $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShift>
     */
    public function WorkShiftStore(\Fatehan\Activities\WorkShift\WorkShift $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftStore',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShift', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Update
     * @param \Fatehan\Activities\WorkShift\WorkShift $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShift>
     */
    public function WorkShiftUpdate(\Fatehan\Activities\WorkShift\WorkShift $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftUpdate',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShift', 'decode'],
        $metadata, $options);
    }

    /**
     * WorkShift Destroy
     * @param \Fatehan\Activities\WorkShift\WorkShiftDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Activities\WorkShift\WorkShiftDestroyResponse>
     */
    public function WorkShiftDestroy(\Fatehan\Activities\WorkShift\WorkShiftDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.services.ApiService/WorkShiftDestroy',
        $argument,
        ['\Fatehan\Activities\WorkShift\WorkShiftDestroyResponse', 'decode'],
        $metadata, $options);
    }

}
