<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Packages\Orderbox\MyOrderBox;
use App\Packages\Whmcs\WhmcsApi;

class updatePromoPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promo:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update  Domain Promo Price';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(WhmcsApi $whmcsapi,MyOrderBox $api)
    {
        if ($this->confirm('Do you wish to Update Domain Promo Price ?')) {

            $promodomains=$api->promoprices();

            foreach ($promodomains as  $domain) {
                $ext=$domain['productkey'];

                $this->info(" $ext Display this on the screen");
            }
            /*             
            $postarray=array(
                'extension' => '.info',
                'currency_code' => 'INR',
                'register[1]' => '300',
            );

            $whmcsapi->get('CreateOrUpdateTLD', $postarray);

            $domain=$postarray['extension'];

            $this->info("$domain domain price updated on the screen "); */
        }
    }
}
