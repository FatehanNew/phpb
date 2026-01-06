<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fatehan\Report;

/**
 * ReportService defines the gRPC service for generating various reports.
 */
class ReportServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * global (maybe)
     * @param \Fatehan\Report\TraffixRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TraffixResponse>
     */
    public function TraffixReport(\Fatehan\Report\TraffixRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TraffixReport',
        $argument,
        ['\Fatehan\Report\TraffixResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a summary review report of areas with traffic details.
     * @param \Fatehan\Report\AreaSummaryReviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\AreaSummaryReviewResponse>
     */
    public function AreaSummaryReviewReport(\Fatehan\Report\AreaSummaryReviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/AreaSummaryReviewReport',
        $argument,
        ['\Fatehan\Report\AreaSummaryReviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a trip report for specified devices and time range.
     * @param \Fatehan\Report\AreaSplitterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\AreaSplitterResponse>
     */
    public function AreaSplitterReport(\Fatehan\Report\AreaSplitterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/AreaSplitterReport',
        $argument,
        ['\Fatehan\Report\AreaSplitterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates a log report based on the provided request parameters.
     * @param \Fatehan\Report\LogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\LogResponse>
     */
    public function LogReport(\Fatehan\Report\LogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/LogReport',
        $argument,
        ['\Fatehan\Report\LogResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * fusion
     * Short report generation methods
     * @param \Fatehan\Report\ShiftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\ShiftResponse>
     */
    public function ShiftReport(\Fatehan\Report\ShiftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/ShiftReport',
        $argument,
        ['\Fatehan\Report\ShiftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Detailed report generation methods
     * @param \Fatehan\Report\TripsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TripsResponse>
     */
    public function TripsReport(\Fatehan\Report\TripsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TripsReport',
        $argument,
        ['\Fatehan\Report\TripsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * The traffic report generation method
     * @param \Fatehan\Report\TrafficRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TrafficResponse>
     */
    public function TrafficReport(\Fatehan\Report\TrafficRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TrafficReport',
        $argument,
        ['\Fatehan\Report\TrafficResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Attendance report generation methods
     * @param \Fatehan\Report\AttendanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\AttendanceResponse>
     */
    public function AttendanceReport(\Fatehan\Report\AttendanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/AttendanceReport',
        $argument,
        ['\Fatehan\Report\AttendanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Extended attendance report generation method
     * @param \Fatehan\Report\AttendanceXRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\AttendanceResponse>
     */
    public function AttendanceXReport(\Fatehan\Report\AttendanceXRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/AttendanceXReport',
        $argument,
        ['\Fatehan\Report\AttendanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Daily traffic report generation method
     * @param \Fatehan\Report\DailyTrafficRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\DailyTrafficResponse>
     */
    public function DailyTrafficReport(\Fatehan\Report\DailyTrafficRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/DailyTrafficReport',
        $argument,
        ['\Fatehan\Report\DailyTrafficResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Trip summary report generation method
     * @param \Fatehan\Report\TripsSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TripsSummaryResponse>
     */
    public function TripsSummaryReport(\Fatehan\Report\TripsSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TripsSummaryReport',
        $argument,
        ['\Fatehan\Report\TripsSummaryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Shift summary report generation method
     * @param \Fatehan\Report\ShiftSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\ShiftSummaryResponse>
     */
    public function ShiftSummaryReport(\Fatehan\Report\ShiftSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/ShiftSummaryReport',
        $argument,
        ['\Fatehan\Report\ShiftSummaryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Work cycle report generation method
     * @param \Fatehan\Report\WorkCycleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\WorkCycleResponse>
     */
    public function WorkCycleReport(\Fatehan\Report\WorkCycleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/WorkCycleReport',
        $argument,
        ['\Fatehan\Report\WorkCycleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * odyssey
     * Trip report generation method
     * @param \Fatehan\Report\TripReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TripReportResponse>
     */
    public function TripReport(\Fatehan\Report\TripReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TripReport',
        $argument,
        ['\Fatehan\Report\TripReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Device data report generation method
     * @param \Fatehan\Report\DeviceDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function DeviceDataReport(\Fatehan\Report\DeviceDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/com.fatehan.reports.ReportService/DeviceDataReport',
        $argument,
        ['\Fatehan\Report\DeviceDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Route review report generation method
     * @param \Fatehan\Report\RouteReviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\RouteReviewResponse>
     */
    public function RouteReviewReport(\Fatehan\Report\RouteReviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/RouteReviewReport',
        $argument,
        ['\Fatehan\Report\RouteReviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Traffix report generation method
     * @param \Fatehan\Report\TripPerformanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\TripPerformanceResponse>
     */
    public function TripPerformanceReport(\Fatehan\Report\TripPerformanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/TripPerformanceReport',
        $argument,
        ['\Fatehan\Report\TripPerformanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Dashboard individual report generation method
     * @param \Fatehan\Report\DashboardIndividualRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\DashboardIndividualResponse>
     */
    public function DashboardIndividual(\Fatehan\Report\DashboardIndividualRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/DashboardIndividual',
        $argument,
        ['\Fatehan\Report\DashboardIndividualResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Route stop report generation method
     * @param \Fatehan\Report\RouteStopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\RouteStopResponse>
     */
    public function RouteStopReport(\Fatehan\Report\RouteStopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/RouteStopReport',
        $argument,
        ['\Fatehan\Report\RouteStopResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Command history report generation method
     * @param \Fatehan\Report\CommandHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\CommandHistoryResponse>
     */
    public function CommandHistoryReport(\Fatehan\Report\CommandHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/CommandHistoryReport',
        $argument,
        ['\Fatehan\Report\CommandHistoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Chart report generation method
     * @param \Fatehan\Report\ChartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ChartReport(\Fatehan\Report\ChartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/com.fatehan.reports.ReportService/ChartReport',
        $argument,
        ['\Fatehan\Report\ChartResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Workflow report generation method
     * @param \Fatehan\Report\WorkflowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\WorkflowResponse>
     */
    public function WorkflowReport(\Fatehan\Report\WorkflowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/WorkflowReport',
        $argument,
        ['\Fatehan\Report\WorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Driver behavior report generation method
     * @param \Fatehan\Report\DriverBehaviorReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Report\DriverBehaviorReportResponse>
     */
    public function DriverBehaviorReport(\Fatehan\Report\DriverBehaviorReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.reports.ReportService/DriverBehaviorReport',
        $argument,
        ['\Fatehan\Report\DriverBehaviorReportResponse', 'decode'],
        $metadata, $options);
    }

}
