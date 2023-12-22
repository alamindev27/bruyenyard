<?php

namespace App\Console\Commands;

use App\Jobs\MainWalletTransferJob;
use App\Services\Logger;
use Illuminate\Console\Command;

class MainWalletTransferCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:main-wallet-transfer-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Main Wallet Transfer command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $logger = new Logger();
        $logger->log('Main Wallet Transfer command', 'Called');
        dispatch(new MainWalletTransferJob())->onQueue('default');
    }
}
