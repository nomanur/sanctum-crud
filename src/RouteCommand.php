<?php

namespace Nomanur\SanctumCrud;

use Illuminate\Console\Command;
use InvalidArgumentException;

class RouteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sanctumcrud:route';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add sanctum crud route';


    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function handle()
    {
        
        $this->exportBackend();
        

        $this->components->info('Sanctum crud routes added in routes/api.php');
    }

    /**
     * Export the authentication backend.
     *
     * @return void
     */
    protected function exportBackend()
    {
    
        file_put_contents(
            base_path('routes/api.php'),
            file_get_contents(__DIR__.'/routes/routes.stub'),
            FILE_APPEND
        );
    }
}