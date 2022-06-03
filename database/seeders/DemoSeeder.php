<?php

namespace Database\Seeders;

use App\Enums\CheckStatus;
use App\Models\Site;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DemoSeeder extends Seeder
{
    public function run()
    {
        $site = Site::create([
            'name' => 'codedor.be',
            'urls' => [
                ['name' => 'home', 'url' => 'https://codedor.be'],
                ['name' => 'about', 'url' => 'https://codedor.be/about'],
                ['name' => 'contact', 'url' => 'https://codedor.be/contact'],
            ],
        ]);

        foreach (range(0, 50) as $i) {
            $status = Arr::random([CheckStatus::Inprogress, CheckStatus::Failed, CheckStatus::Compelete]);

            $site->checks()->create([
                'status' => $status,
                'completed_at' => $status === CheckStatus::Compelete || $status === CheckStatus::Failed ? now() : null,
            ]);
        }
    }
}
