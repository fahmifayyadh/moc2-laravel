<?php

namespace Facade\FlareClient;

<<<<<<< HEAD
use Exception;
=======
>>>>>>> parent of 31cfa1b1 (p)
use Facade\FlareClient\Http\Client;
use Facade\FlareClient\Truncation\ReportTrimmer;

class Api
{
    /** @var \Facade\FlareClient\Http\Client */
<<<<<<< HEAD
    protected $client;
=======
    private $client;
>>>>>>> parent of 31cfa1b1 (p)

    /** @var bool */
    public static $sendInBatches = true;

    /** @var array */
<<<<<<< HEAD
    protected $queue = [];
=======
    private $queue = [];
>>>>>>> parent of 31cfa1b1 (p)

    public function __construct(Client $client)
    {
        $this->client = $client;

        register_shutdown_function([$this, 'sendQueuedReports']);
    }

    public static function sendReportsInBatches(bool $batchSending = true)
    {
        static::$sendInBatches = $batchSending;
    }

    public function report(Report $report)
    {
        try {
            if (static::$sendInBatches) {
                $this->addReportToQueue($report);
            } else {
                $this->sendReportToApi($report);
            }
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> parent of 31cfa1b1 (p)
            //
        }
    }

    public function sendTestReport(Report $report)
    {
        $this->sendReportToApi($report);
    }

<<<<<<< HEAD
    protected function addReportToQueue(Report $report)
=======
    private function addReportToQueue(Report $report)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->queue[] = $report;
    }

    public function sendQueuedReports()
    {
        try {
            foreach ($this->queue as $report) {
                $this->sendReportToApi($report);
            }
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> parent of 31cfa1b1 (p)
            //
        } finally {
            $this->queue = [];
        }
    }

<<<<<<< HEAD
    protected function sendReportToApi(Report $report)
=======
    private function sendReportToApi(Report $report)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->client->post('reports', $this->truncateReport($report->toArray()));
    }

<<<<<<< HEAD
    protected function truncateReport(array $payload): array
=======
    private function truncateReport(array $payload): array
>>>>>>> parent of 31cfa1b1 (p)
    {
        return (new ReportTrimmer())->trim($payload);
    }
}
