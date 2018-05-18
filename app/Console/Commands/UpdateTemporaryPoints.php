<?php

namespace App\Console\Commands;

use App\Models\Point;
use Illuminate\Console\Command;

class UpdateTemporaryPoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:temporary_points';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to update temporary points that are unvalid, this update the points to false.';

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
     * @return mixed
     */
    public function handle()
    {
        $temporaryPoints = Point::where(function ($query) {
            $query->where('lifespan', 'Temporário')
                ->where('valid_until', '<=', date("Y-m-d"))
                ->where('active', TRUE);
        })->get();
        $this->info('Pontos temporários encontrados');

        foreach ($temporaryPoints as $temporaryPoint){
            $temporaryPoint->active = FALSE;
            $temporaryPoint->save();
        }

        $this->info('Pontos temporários atualizados com sucesso');
    }
}
