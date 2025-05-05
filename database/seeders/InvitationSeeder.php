<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invitation;

class InvitationSeeder extends Seeder
{
    public function run(): void
    {
        Invitation::create([
            'name' => 'KOPI TEORI',
            'slug' => 'KOPI-TEORI',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 40,
            'created_by' => 1,
        ]);
    }
}
