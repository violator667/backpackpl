<?php

namespace violator667\backpackpl\app\Console\Commands;

use Illuminate\Console\Command;

class Backpackpl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpackpl:addpolish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ads polish translation to Laravel Backpack';

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
        $this->line("Sugeruje by polskie tlumaczenie uruchamiac na CZYSTEJ instalacji Backpacka!");
        if ($this->confirm('Jesli nadpisales pliki widokow (np. list.blade.php) dla Backpacka kontunuujac stracisz swoje zmiany. Jestes pewien, ze chcesz kontunuowac?')) {
            $from_dir = 'vendor/violator667/backpackpl/src';
            $base = base_path();
            $the_dir = $base.'/'.$from_dir;
            $to_dir = $base.'/';
            \File::copyDirectory($the_dir, $to_dir);
            $this->line("Juz po wszystkim ;)");
        }

    }
}
