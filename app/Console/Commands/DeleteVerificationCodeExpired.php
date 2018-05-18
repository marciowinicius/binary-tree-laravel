<?php

namespace App\Console\Commands;

use App\Models\VerificationCode;
use Illuminate\Console\Command;

class DeleteVerificationCodeExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shopping:delete_verification_code_expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to delete the verifications codes(verification_code) that is expired';

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
     * @throws \Exception
     */
    public function handle()
    {
        $objVerificationCodes = VerificationCode::where(function ($query) {
            $query->where('lifespan', '<', date("Y-m-d"));
        })->get();

        if (!is_null($objVerificationCodes) && !empty($objVerificationCodes)) {
            $this->info('Códigos de verificação encontrados');

            foreach ($objVerificationCodes as $verificationCode) {
                $verificationCode->delete();
            }

            $this->info('Códigos de verificação deletados com sucesso');
        } else {
            $this->info('Não foram encontrados códigos de verificação para deletar');
        }
    }
}
