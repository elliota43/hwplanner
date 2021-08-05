<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\CLImate\CLImate;

class CLIDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cli:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CLI Demo';

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
    public function handle(CLImate $climate)
    {
        $climate->lightCyan('test');
        return 0;
    }
}
