<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Descriptor\Descriptor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'title' => 'Test Collection',
                'description' => "Always Unique\n\n"
                    . "//Test Collection\n"
                    . "-Qualification confirmed\n"
                    . "-Orders closed\n"
                    . "//Appointment required for apparel requests, please allow 6 to 8 weeks for production.\n"
                    . "//All rights reserved."
            ],
            [
                'title' => 'EPOQUE',
                'description' => "Your past, your future, your EPOQUE.\n\n"
                    . "The EPOQUE line arose from serendipitous and unintended actions of fashion designers, and has gradually become a tradition among designers over hundreds of years. This not-for-profit, pure, and calm-minded approach to fashion design will become a tenet for every era."
            ],
            [
                'title' => 'Made by 0011',
                'description' => "Established Year 0011\n\n"
                    . "In order to celebrate the victory over the Nian beast, artisans craft clothes every year for soldiers in the image and colors of the Nian beast. Year after year follows, with festivities and celebrations roaring like firecrackers."
            ],
            [
                'title' => '0011 Tempest',
                'description' => "New Year, New Trends.\n\n"
                    . "0011's sub-brand, \"Tempest\" focuses on capturing the sights and sounds of the streets. This series is rooted in the inspired and constantly shifting styles of streets, transforming the latest and trendiest ideas into a revolutionary new look."
            ],
            [
                'title' => 'Coral Coast',
                'description' => "Show your true self!\n\n"
                    . "Coral Coast is a sub-brand of MARTHE, mainly for water sports and summer attire, imbuing fashion with the vitality of summer! Inheriting MARTHE's philosophy, this series focuses on bringing cutting-edge design to fit the needs of the wearer, and embellishing the coastline with beautiful colors year after year."
            ],
            [
                'title' => 'MARTHE',
                'description' => "Go all out.\n\n"
                    . "A famous sports fashion brand with a renowned Kazdel designer. This brand has gained popularity in the sportswear market throughout many countries, and particularly loved in Ursus. It has many sub-brands, which intimately cater to the complex needs of its customers."
            ],
            [
                'title' => 'Witch Feast',
                'description' => "The night approaches, and the Witch's Feast is nigh.\n\n"
                    . "Rhodes Island holds its Witch's Feast festivities every year, turning an ancient tradition long restricted to female Sarkaz into something everyone can enjoy. During this merriment, colorful costumes and decorations can be seen all over, and these festive outfits are sure to become a fond memory for all the operators."
            ],
            [
                'title' => 'Cambrian Series',
                'description' => "Do not fear the cold.\n\n"
                    . "The Cambrian brand is famous for its cold-protection properties. Well-received in the colder regions of Terra, Cambrian gradually expanded outwards with the advent of greater climate change. One of the original brands for Messengers, Cambrian continues to introduce new products but holds on to the same core ideal – providing safety, warmth, and elegance."
            ],
            [
                'title' => 'Icefield Messenger',
                'description' => "He giveth, yet asketh for nothing in return.\n\n"
                    . "Since ancient times, the legend of a messenger has circulated across Terra. Wearing a red outfit and riding a sleigh, he crossed the vast snowy tundra to deliver live-saving supplies to others. To commemorate this messenger, his story had become a brand, carrying people's simple and pure wishes."
            ],
            [
                'title' => 'Vitafield',
                'description' => "Life, Unbound.\n\n"
                    . "The Vitafield line focuses on the design of outdoor attire. We heard our customers' desire for exploring around the world around them, and delivered with our lightweight, durable, and exceptionally-designed products. After finishing the first production run, Vitafield became a novel trend even among general public."
            ],
            [
                'title' => 'Pioneer',
                'description' => "Pioneer, explore the unknown\n\n"
                    . "The Pioneer series is a subdivision of Raythean, dedicated to providing new possibilities for professionals. The Pioneer series fills the niche of a clothing market suited for professionals who work in extreme environments. Emphasizing reliability, ease of use, and easy maintenance, allow us to accompany you as you pioneer uncharted territory."
            ],
            [
                'title' => 'Striker',
                'description' => "Striker, valiantly step forward.\n\n"
                    . "The Striker series is a subdivision of Raythean, dedicated to providing equipment support to professional specialist units. The Striker series gives all-round consideration to a breadth of scenarios involving specialist combat, employing on-site tests to ensure product performance. Allow us to accompany you as you strike forth, prevail, and press onward."
            ],
            [
                'title' => 'Bloodline of Combat',
                'description' => "Through the bloodline, the struggle continues.\n\n"
                    . "\"Bloodline of Combat\" is an experimental personal equipment series developed by Rhodes Island in collaboration with other organizations based upon the actual needs of operators. The equipment is densely packed with advanced, and potentially even dangerous technology, for operators to be able to deal with the most demanding tasks. Rhodes Island and its operators never give up."
            ],
            [
                'title' => 'Rhodes Kichen',
                'description' => "Fine clothes, fine flavors, and a fine future.\n\n"
                    . "Rhodes Island operators hail from every corner of Terra, and bring with them their own cuisine from home. The festive attire of the Rhodes Kitchen series originates from a combination of food culture and the operators' feedback, brought to life with the artistry of the designer operators."
            ],
            [
                'title' => 'Dreambind Castle',
                'description' => "Your terrorbound slumber. Face your fears.\n\n"
                    . "Once again, Pathyell Castle has been shrouded in mist. Dreams torment the people, while wicked spirits run the streets amok. The Viscount of the Final Age, who set these affairs in motion, now lies dormant beneath the castle grounds. The Operative Investigators are called to settle the matter—they must delve deep into the Castle, and unearth its truest secrets held within."
            ],
            [
                'title' => 'Whistlewind',
                'description' => "Your terrorbound slumber. Face your fears.\n\n"
                    . "Once again, Pathyell Castle has been shrouded in mist. Dreams torment the people, while wicked spirits run the streets amok. The Viscount of the Final Age, who set these affairs in motion, now lies dormant beneath the castle grounds. The Operative Investigators are called to settle the matter—they must delve deep into the Castle, and unearth its truest secrets held within."
            ],
            [
                'title' => 'Ambience Synesthesia',
                'description' => "Heart with the rhythm, give it up to the rock.\n\n"
                    . "Every concert embodies its hosts' beating blood, and preparing performers' outfits with that in mind is the one and only mission of the Ambience Synesthesia brand. No matter whether formal or streetwear, we'll stop at no end to provide musicians the most fitting attire for when the lights go on."
            ],
            [
                'title' => 'Crossover',
                'description' => "Together we stand.\n\n"
                    . "Rhodes Island cooperates with other organizations to launch these fashion lines. These mutually beneficial cooperation agreements create a win-win situation, and operators even get to enjoy some fresh attire."
            ],
            [
                'title' => 'Shining Steps',
                'description' => "Step up, all eyes on you!\n\n"
                    . "Monster Siren Records' exclusive idol project clothing brand invites big-name designers to dedicate themselves to the art of stage costumes for young people with idol dreams. The time is now, step up to the ladder and climb the rungs to be the idol only you can be!"
            ],
            [
                'title' => 'Achievement Star',
                'description' => "Press Start\n\n"
                    . "Casual clothing made for gamers, comfortable while maximizing the gaming experience."
            ],
            [
                'title' => '0011 Yun',
                'description' => "意韵不绝\n\n"
                    . "0011子品牌“韵”回顾城市往昔，重拾经典之美。韵系列致力以古典气质重塑流行风尚，用精湛工艺筑就独特意趣，开拓潮流边界。"
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'title' => $brand['title'],
                'slug' => Str::slug($brand['title']),
                'description' => $brand['description'],
            ]);
        }
    }
}
