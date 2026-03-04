<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\FeatureGroup;
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
            [
                'group' => 'interior',
                'en' => 'Furnished',
                'ar' => 'مفروشة',
                'type' => 'boolean',
            ],
            [
                'group' => 'interior',
                'en' => 'Built-in Wardrobes',
                'ar' => 'خزائن حائط',
                'type' => 'boolean',
            ],

            // Exterior
            [
                'group' => 'exterior',
                'en' => 'Garden',
                'ar' => 'حديقة',
                'type' => 'boolean',
            ],
            [
                'group' => 'exterior',
                'en' => 'Balcony',
                'ar' => 'شرفة',
                'type' => 'boolean',
            ],

            // Utilities
            [
                'group' => 'utilities',
                'en' => 'Water Supply',
                'ar' => 'مياه',
                'type' => 'boolean',
            ],
            [
                'group' => 'utilities',
                'en' => 'Electricity',
                'ar' => 'كهرباء',
                'type' => 'boolean',
            ],

            // Building
            [
                'group' => 'building',
                'en' => 'Elevator',
                'ar' => 'مصعد',
                'type' => 'boolean',
            ],
            [
                'group' => 'building',
                'en' => 'Year Built',
                'ar' => 'سنة البناء',
                'type' => 'number',
            ],

            // Security
            [
                'group' => 'security',
                'en' => 'Security Guard',
                'ar' => 'حراسة',
                'type' => 'boolean',
            ],
        ];

        foreach ($features as $feature) {

            $group = FeatureGroup::where('slug', $feature['group'])->first();

            if (!$group) {
                continue; // safety
            }

            Feature::firstOrCreate(
                ['slug' => \Str::slug($feature['en'])],
                [
                    'name' => [
                        'en' => $feature['en'],
                        'ar' => $feature['ar'],
                    ],
                    'type' => $feature['type'],
                    'feature_group_id' => $group->id,
                ]
            );
        }
    }
}
