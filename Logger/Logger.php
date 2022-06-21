<?php

namespace MelhorEnvio\Quote\Logger;

use MelhorEnvio\Quote\Api\LoggerInterface;
use MelhorEnvio\Quote\Helper\Data;

/**
 * Class Logger
 * @package MelhorEnvio\Quote\Logger
 */
class Logger extends \Monolog\Logger implements LoggerInterface
{
    /**
     * @var Data
     */
    private $helperData;

    /**
     * Logger constructor.
     * @param Data $helperData
     * @param array $handlers
     * @param array $processors
     */
    public function __construct(
        Data $helperData,
        array $handlers = [],
        array $processors = []
    ) {
        parent::__construct('melhorenvio', $handlers, $processors);
        $this->helperData = $helperData;
    }
}
