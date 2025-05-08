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
            'event_date' => '2025-05-23',
            'people' => 40,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'KOPI TUKU',
            'slug' => 'KOPI-TUKU',
            'status' => 'pending',
            'event_date' => '2025-05-23',
            'people' => 5,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'COFFEE BEAN',
            'slug' => 'COFFEE-BEAN',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 5,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'PANE E PANE',
            'slug' => 'PANE-E-PANE',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 10,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'RUSTIC MARKET',
            'slug' => 'RUSTIC-MARKET',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 10,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'FEEL MATCHA',
            'slug' => 'FELL-MATCHA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 5,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'SHUSHU',
            'slug' => 'SHUSHU',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'GOFFEE',
            'slug' => 'GOFFEE',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'MATTEA',
            'slug' => 'MATTEA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'DEPRESSO COFFEE',
            'slug' => 'DEPRESSO-COFFEE',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'SUDO BREW',
            'slug' => 'SUDO-BREW',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'LOOPLINE COFFEE',
            'slug' => 'LOOPLINE-COFFEE',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'FRIENDS WITH BREW',
            'slug' => 'FRIENDS-WITH-BREW',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'BITUKA',
            'slug' => 'BITUKA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'PT. GRAND INDONESIA',
            'slug' => 'GRAND-INDONESIA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'CHRISTY PUDING',
            'slug' => 'CHRISTY-PUDDING',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'PT. OHALA INTERNATIONAL',
            'slug' => 'OHALA-INTERNATIONAL',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'NUSA CREAMERY',
            'slug' => 'NUSA-CREAMERY',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 1,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'KOPITAGRAM',
            'slug' => 'KOPITAGRAM',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'CHAMP GROUP',
            'slug' => 'CHAMP-GROUP',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 5,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'KOPI KINA',
            'slug' => 'KOPI-KINA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 4,
            'created_by' => 1,
        ]);
        Invitation::create([
            'name' => 'PILONA',
            'slug' => 'PILONA',
            'status' => 'pending',
            'event_date' => '2025-05-22',
            'people' => 2,
            'created_by' => 1,
        ]);
    }
}
