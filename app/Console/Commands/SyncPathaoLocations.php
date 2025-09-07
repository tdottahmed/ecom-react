<?php

namespace App\Console\Commands;

use App\Services\PathaoLocationService;
use Illuminate\Console\Command;

class SyncPathaoLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * php artisan pathao:sync-locations
     */
    protected $signature = 'pathao:sync-locations';

    /**
     * The console command description.
     */
    protected $description = 'Sync Pathao cities, zones, and areas into local database';

    public function __construct(private readonly PathaoLocationService $locationService)
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $this->info('🔄 Starting Pathao location sync...');

        $result = $this->locationService->syncReferenceData();

        if ($result['success']) {
            $this->info('✅ '.$result['message']);
            return Command::SUCCESS;
        }

        $this->error('❌ '.$result['message']);
        return Command::FAILURE;
    }
}
