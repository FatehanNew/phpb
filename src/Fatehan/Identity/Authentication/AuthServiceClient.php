<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fatehan\Identity\Authentication;

/**
 * authentication system
 */
class AuthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * verifies the token and returns the identity
     * @param \Fatehan\Identity\Authentication\VerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Verify(\Fatehan\Identity\Authentication\VerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/com.fatehan.identities.AuthService/Verify',
        $argument,
        ['\Fatehan\Identity\Authentication\VerifyResponse', 'decode'],
        $metadata, $options);
    }

}
