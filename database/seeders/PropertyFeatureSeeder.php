<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertyFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [

            // Interior
            ['en' => 'Balcony', 'ar' => 'شرفة', 'type' => 'boolean', 'group' => 'Interior'],
            ['en' => 'Central AC', 'ar' => 'تكييف مركزي', 'type' => 'boolean', 'group' => 'Interior'],
            ['en' => 'Elevator', 'ar' => 'مصعد', 'type' => 'boolean', 'group' => 'Interior'],
            ['en' => 'Furnished', 'ar' => 'مفروشة', 'type' => 'boolean', 'group' => 'Interior'],

            // Exterior
            ['en' => 'Garden', 'ar' => 'حديقة', 'type' => 'boolean', 'group' => 'Exterior'],
            ['en' => 'Private Pool', 'ar' => 'مسبح خاص', 'type' => 'boolean', 'group' => 'Exterior'],
            ['en' => 'Terrace', 'ar' => 'سطح', 'type' => 'boolean', 'group' => 'Exterior'],

            // Utilities
            ['en' => 'Electricity Meter', 'ar' => 'عداد كهرباء', 'type' => 'boolean', 'group' => 'Utilities'],
            ['en' => 'Water Meter', 'ar' => 'عداد مياه', 'type' => 'boolean', 'group' => 'Utilities'],
            ['en' => 'Generator', 'ar' => 'مولد كهرباء', 'type' => 'boolean', 'group' => 'Utilities'],

            // Numeric
            ['en' => 'Year Built', 'ar' => 'سنة البناء', 'type' => 'number', 'group' => 'Details'],
            ['en' => 'Ceiling Height', 'ar' => 'ارتفاع السقف', 'type' => 'number', 'group' => 'Details'],

            // Select
            ['en' => 'Finishing Type', 'ar' => 'نوع التشطيب', 'type' => 'select', 'group' => 'Details'],
            ['en' => 'View Type', 'ar' => 'نوع الإطلالة', 'type' => 'select', 'group' => 'Details'],
        ];

        foreach ($features as $feature) {
            Feature::firstOrCreate(
                ['slug' => Str::slug($feature['en'])],
                [
                    'name' => [
                        'en' => $feature['en'],
                        'ar' => $feature['ar'],
                    ],
                    'type' => $feature['type'],
                    'group' => $feature['group'],
                ]
            );
        }
        //
    }
}
