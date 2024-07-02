<?php
namespace NexaMerchant\Monitor\Console\Commands;

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Monitor:install';

    protected $description = 'Install Monitor an app';

    public function getAppVer() {
        return config("Monitor.ver");
    }

    public function getAppName() {
        return config("Monitor.name");
    }

    public function handle()
    {
        $this->info("Install app: Monitor");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Monitor Install cannelled");
            return false;
        }
    }
}