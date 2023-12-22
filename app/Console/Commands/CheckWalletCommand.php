<?php

namespace App\Console\Commands;

use App\Jobs\CheckWalletJob;
use App\Services\Logger;
use Illuminate\Console\Command;

class CheckWalletCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-wallet-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $logger = new Logger();
        $logger->log('check wallet command', 'Called');
        dispatch(new CheckWalletJob())->onQueue('default');
    }
}
