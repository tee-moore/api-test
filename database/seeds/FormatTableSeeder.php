<?php

use Illuminate\Database\Seeder;
use App\Format;
use Carbon\Carbon;

class FormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Format::insert(
            [
                [
                    'name'       => 'VHS',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name'       => 'DVD',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name'       => 'Blu-Ray',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]
        );
    }
}
