<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearOldLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all old Logs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $this->info('Processing...');
        $logs=\App\LogHistory::where( 'created_at', '<=', \Carbon\Carbon::now()->subWeeks(2))->get();
        $count=count($logs);
        \App\LogHistory::where( 'created_at', '<=', \Carbon\Carbon::now()->subWeeks(2))->delete();
        $this->info('Done. Deleted ' . $count . ' log records!');

    }
}
