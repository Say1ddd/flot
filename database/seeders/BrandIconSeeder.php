<?php

namespace Database\Seeders;

use App\Models\BrandIcon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icon_paths = [
            "https://static.wikia.nocookie.net/mrfz/images/3/3c/Test_Collection.png",
            "https://static.wikia.nocookie.net/mrfz/images/9/91/EPOQUE.png",
            "https://static.wikia.nocookie.net/mrfz/images/2/2b/Made_by_0011.png",
            "https://static.wikia.nocookie.net/mrfz/images/e/ef/0011_Tempest.png",
            "https://static.wikia.nocookie.net/mrfz/images/f/f6/Coral_Coast.png",
            "https://static.wikia.nocookie.net/mrfz/images/0/09/MARTHE.png",
            "https://static.wikia.nocookie.net/mrfz/images/f/fa/Witch_Feast.png",
            "https://static.wikia.nocookie.net/mrfz/images/7/74/Cambrian_Series.png",
            "https://static.wikia.nocookie.net/mrfz/images/f/f3/Icefield_Messenger.png",
            "https://static.wikia.nocookie.net/mrfz/images/e/ed/Vitafield.png",
            "https://static.wikia.nocookie.net/mrfz/images/2/2b/Pioneer.png",
            "https://static.wikia.nocookie.net/mrfz/images/2/22/Striker.png",
            "https://static.wikia.nocookie.net/mrfz/images/6/6c/Bloodline_of_Combat.png",
            "https://static.wikia.nocookie.net/mrfz/images/d/d8/Rhodes_Kitchen.png",
            "https://static.wikia.nocookie.net/mrfz/images/4/42/Dreambind_Castle.png",
            "https://static.wikia.nocookie.net/mrfz/images/d/df/Whistlewind.png",
            "https://static.wikia.nocookie.net/mrfz/images/4/45/Ambience_Synesthesia.png",
            "https://static.wikia.nocookie.net/mrfz/images/f/f2/Crossover.png",
            "https://static.wikia.nocookie.net/mrfz/images/8/8d/Shining_Steps.png",
            "https://static.wikia.nocookie.net/mrfz/images/e/e9/Achievement_Star.png",
            "https://static.wikia.nocookie.net/mrfz/images/d/d7/0011_Yun.png",
        ];

        $brand_id = 1;

        foreach ($icon_paths as $icon_path)
            BrandIcon::create([
                'icon_path' => $icon_path,
                'brand_id' => $brand_id++
            ]);
    }
}
