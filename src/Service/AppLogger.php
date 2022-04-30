<?php

namespace App\Service; 
use App\Service\log\Log4php;
use App\Service\log\ThinkLog;
 

class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINKLOG = 'thinkLog';

    private $logger;

    
    public function __construct($type = self::TYPE_LOG4PHP)
    {
        if ($type == self::TYPE_LOG4PHP) {
            $this->logger = new Log4php();
        } else if ($type == self::TYPE_THINKLOG) {
            $this->logger = new ThinkLog();
        } 
    }

    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}