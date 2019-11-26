<?php

use App\Sportschool;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SportschoolsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('sportschools')->insert([
        'name' => 'BasicFit',
        'place' => 'Rotterdam Alexander',
        'description' => 'Het maakt niet uit wat je fitnessdoel is, hoe groot of klein, het lukt je bij Basic-Fit. Wij helpen je! Het enige dat je hoeft te doen, is ervoor gaan!',
        'price' => 35,
        'showers' => $faker->boolean(),
        'imagepath' => 'https://www.basic-fit.com/on/demandware.static/Sites-BFE-Site/-/default/dw2df550b3/img/basic-fit-logo-squared.jpg',
        'url' => 'https://www.basic-fit.com'
        ]);//->categories()->attach(1);

        DB::table('sportschools')->insert([
        'name' => 'The Fitness Lounge',
        'place' => 'Vlaardingen',
        'description' => 'Een maatje minder. Of juist méér – maar dan in spiermassa. Wat je doel ook is, bij The Fitness Lounge gaat het je lukken!',
        'price' => 32,
        'showers' => $faker->boolean(),
        'imagepath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1eFOPLpKigy_ttNvVse-fLDl1XDkSP3coubUnN-ecqZoYKJJN&s',
        'url' => 'https://www.thefitnesslounge.nl'
        ]);//->categories()->attach(2);

        DB::table('sportschools')->insert([
            'name' => 'David Lloyd',
            'place' => 'Rotterdam Centrum',
            'description' => 'Bij David Lloyd maakt het niet uit wat je doel is, wij helpen je graag met het waar maken van je doel. Bij een van onze sportscholen kan je op je gemakt een gezonder toekomst tegemoet komen!',
            'price' => 40,
            'showers' => $faker->boolean(),
            'imagepath' => 'https://www.wiggleandgiggle.co.uk/wp-content/uploads/2017/12/david-llyod-wiggle-giggle-classes.jpg',
            'url' => 'https://www.davidlloyd.nl',
        ]);//->categories()->attach(3);

        DB::table('sportschools')->insert([
        'name' => 'MyLife',
        'place' => 'Rotterdam Noord',
        'description' => 'Lid worden bij MyLife is perfect voor wie sporten als onderdeel van een uitgebalanceerd leven ziet. Voor wie met partner, familie of vrienden lekker op pad wil naar de sportschool. Voor wie daar vooral plezier in wil hebben. En voor wie een professionele omgeving dan vanzelfsprekend is.',
        'price' => 20,
        'showers' => $faker->boolean(),
        'imagepath' => 'https://pbs.twimg.com/profile_images/510149986802094080/bjVmYUbg_400x400.png',
        'url' => 'https://www.mylife.nl',
        ]);//->categories()->attach(4);

        DB::table('sportschools')->insert([
        'name' => 'Fit for Free',
        'place' => 'Spijkenisse',
        'description' => 'Het maakt niet uit wat voor sporter je bent. Wij zijn er om je sportwensen vorm te geven en je sportdoelen te bereiken door je op weg te helpen met sporten. Samen zorgen wij voor je ideale sportieve leefstijl, zodat je je thuis voelt.',
        'price' => 15,
        'showers' => $faker->boolean(),
        'imagepath' => 'https://cdn.myonlinestore.eu/94031293-6be1-11e9-a722-44a8421b9960/image/cache/full/7c6122feb2ce18a65240788b977180f1d564cc62.jpg',
        'url' => 'https://www.fitforfree.nl',
        ]);//->categories()->attach(5);
    }
}