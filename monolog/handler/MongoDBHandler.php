<?php
namespace monolog\handler;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use \MongoDB\Driver\Manager;
use \MongoDB\Driver\BulkWrite;

class MongoDBHandler extends AbstractProcessingHandler
{
    private $initialized = false;
    private $manager;
    private $statement;
    private $namespace;
    public function __construct(Manager $manager,$namespace, $level = Logger::DEBUG, $bubble = true)
    {
        $this->manager = $manager;
        $this->namespace = $namespace;
        parent::__construct($level, $bubble);
    }

    protected function write(array $record)
    {

        $bulk = new BulkWrite();
        $bulk->insert([
            'channel' => $record['channel'],
            'level' => $record['level'],
            'message' => $record['formatted'],
            'time' => $record['datetime']->format('U'),
        ]);
       $this->manager->executeBulkWrite($this->namespace,$bulk);
    }
}