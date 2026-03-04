<?php

namespace Database\Seeders;

use App\Models\FeatureGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FeatureGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            ['en' => 'Interior', 'ar' => 'الميزات الداخلية', 'sort' => 1],
            ['en' => 'Exterior', 'ar' => 'الميزات الخارجية', 'sort' => 2],
            ['en' => 'Utilities', 'ar' => 'الخدمات الأساسية', 'sort' => 3],
            ['en' => 'Building', 'ar' => 'مواصفات المبنى', 'sort' => 4],
            ['en' => 'Security', 'ar' => 'الأمان', 'sort' => 5],
        ];

        foreach ($groups as $group) {
            FeatureGroup::firstOrCreate(
                ['slug' => \Str::slug($group['en'])],
                [
                    'name' => [
                        'en' => $group['en'],
                        'ar' => $group['ar'],
                    ],
                    'sort_order' => $group['sort'],
                ]
            );
        }
    }
}
