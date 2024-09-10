<?php
require "vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('ipt10');
$log->pushHandler(new StreamHandler('ipt10.log'));

// add records to the log
$log->warning('[YOUR COMPLETE NAME]');
$log->error('[YOUR EMAIL ADDRESS]');
$log->info('profile', [
    'student_number' => '[YOUR STUDENT NUMBER]',
    'college' => '[COLLEGE NAME]',
    'program' => '[PROGRAM NAME]',
    'university' => '[UNIVERSITY NAME]'
]);

class TestClass
{
    private $logger;

    public function __construct($logger_name)
    {
        $this->logger = new Logger($logger_name);
        $this->logger->pushHandler(new StreamHandler('ipt10.log', Level::Info)); // Set up logging
        // Log that the class has been created
        $this->logger->info(__CLASS__ . " created");
    }

    public function greet($name)
    {
        $greeting = "Hello, " . $name;
        // Log the greeting
        $this->logger->info(__METHOD__ . " Greetings to {$name}");
        return $greeting;
    }

    public function getAverage($data)
    {
        $this->logger->info(__CLASS__ . " Getting the average");
        // Compute the average
        $average = array_sum($data) / count($data);
        return $average;
    }

    public function largest($data)
    {
        $this->logger->info(__CLASS__ . " Getting the largest number");
        // Get the largest number
        return max($data);
    }

    public function smallest($data)
    {
        $this->logger->info(__CLASS__ . " Getting the smallest number");
        // Get the smallest number
        return min($data);
    }
}

// Create an instance of TestClass
$my_name = '[YOUR NAME]';
$obj = new TestClass('TestLogger');
echo $obj->greet($my_name) . PHP_EOL;

$data = [100, 345, 4563, 65, 234, 6734, -99];
echo "Average: " . $obj->getAverage($data) . PHP_EOL;
echo "Largest: " . $obj->largest($data) . PHP_EOL;
echo "Smallest: " . $obj->smallest($data) . PHP_EOL;

// Log data
$log->info('data', ['values' => $data]);
$log->info('object', ['object' => $obj]);

?>
