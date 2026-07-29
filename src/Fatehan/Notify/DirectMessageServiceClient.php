<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fatehan\Notify;

/**
 * This file defines the DirectMessageService for sending direct messages to users, organizations, or topics.
 */
class DirectMessageServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Sends a direct message to specified recipients.
     * @param \Fatehan\Notify\DirectMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Fatehan\Notify\DirectMessageResult>
     */
    public function SendDirectMessage(\Fatehan\Notify\DirectMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.notifies.DirectMessageService/SendDirectMessage',
        $argument,
        ['\Fatehan\Notify\DirectMessageResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Streams state updates for a direct message request.
     * @param \Fatehan\Notify\DirectMessageStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function DirectMessageState(\Fatehan\Notify\DirectMessageStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/com.fatehan.notifies.DirectMessageService/DirectMessageState',
        $argument,
        ['\Fatehan\Notify\DirectMessageStateResponse', 'decode'],
        $metadata, $options);
    }

}
