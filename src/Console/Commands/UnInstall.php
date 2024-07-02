<?php
namespace NexaMerchant\Monitor\Console\Commands;

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Monitor:uninstall';

    protected $description = 'Uninstall Monitor an app';

    public function getAppVer() {
        return config("Monitor.ver");
    }

    public function getAppName() {
        return config("Monitor.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Monitor UnInstall cannelled");
            return false;
        }
    }
}