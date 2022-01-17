<?php

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'image' => 'https://www.momondo.it/h/run/api/image?caller=Packages&height=750&width=3870&crop=true&url=/himg/e0/b9/77/leonardo-2692804-DXBCP_3941338727_O-123252.jpg',
                'city' => 'Dubai',
                'hotel' => 'Crowne Plaza Dubai - Deira',
                'price' => 556,
                'vote' => 7.9,
            ],
            [
                'image' => 'https://www.momondo.it/h/run/api/image?caller=Packages&height=751&width=1808&crop=true&url=/himg/2f/f7/31/hotelsdotcom-87392722-26c8637e_w-336696.jpg
',
                'city' => 'Dubai',
                'hotel' => 'Ivory Grand Hotel Apartments',
                'price' => 825,
                'vote' => 8.2,
            ],
            [
                'image' => 'https://www.momondo.it/h/run/api/image?caller=Packages&height=751&width=1808&crop=true&url=/himg/85/a0/7e/leonardo-171514806-dxbmb-pool-4090-hor-clsc_O-066955.jpg',
                'city' => 'Dubai',
                'hotel' => 'The Westin Dubai Mina Seyahi Beach Resort & Marina',
                'price' => 1522,
                'vote' => 8.8,
            ],
        ];

        foreach ($packages as $package) {
            $newPackage = new Package();
            $newPackage->image = $package['image'];
            $newPackage->city = $package['city'];
            $newPackage->hotel = $package['hotel'];
            $newPackage->price = $package['price'];
            $newPackage->vote = $package['vote'];
            $newPackage->save();
        }

    }
}
