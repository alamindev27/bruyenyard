<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\ERC20TokenApi;
use App\Models\CryptoWallet;
use App\Services\Logger;
use Carbon\Carbon;

class CheckWalletJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $tokenApi;
    private $logger;

    public function __construct()
    {
        $this->tokenApi = new ERC20TokenApi();
        $this->logger = new Logger();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $wallet = CryptoWallet::where('status', 0)->get();
        $current_time = Carbon::now();
        foreach($wallet as $v)
        {

            $created_at = Carbon::parse($v->created_at);
            $time_diff = $current_time->diffInHours($created_at);

            if ($time_diff > 2) {
                $balance = $this->tokenApi->checkWalletBalance([
                    'type' => 3,
                    "address" => $v->address,
                    "contract_address" =>  $v->contract_address,
                ]);

                if($balance['success'])
                {
                    if($balance['data']->net_balance != 0 ||  $balance['data']->token_balance != 0)
                    {
                       // $this->logger->log($balance['data']->token_balance, 'Called');
                        CryptoWallet::where("address", $v->address)->update([
                            "balance" => json_encode([$balance['data']]),
                            "status" => 2
                        ]);
                    }else{
                        CryptoWallet::where("address", $v->address)->update([
                            "status" => 3
                        ]);
                    }
                }
            }
 
        }

        // $this->logger->log($wallet, 'Called');
    }
}
