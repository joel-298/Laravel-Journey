<?php

namespace App\Console\Commands;

use App\Exports\UsersExport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Storage;

class MyCronJob extends Command
{
    // Command signature
    protected $signature = 'export:overs';

    // Command description
    protected $description = 'Export Overs Data CSV via cron job';

    public function handle()
    {
        // Prepare your data (replace with your actual data fetching)
        $finalData = [
            ['id' => 1, 'name' => 'Joel', 'email' => 'joel@example.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ];

        $fileName = Carbon::now()->format('d-m-y') . '_OversData.csv';

        // Export CSV and save to storage (storage/app/public or elsewhere)
        Excel::store(new UsersExport($finalData), 'public/' . $fileName);

        $this->info('CSV Exported successfully as ' . $fileName);
    }
}