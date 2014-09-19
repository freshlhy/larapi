<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $picture_url = [
        'http://example.com/images/example1.jpg',
        'http://example.com/images/example2.jpg',
        'http://example.com/images/example3.jpg',
        'http://example.com/images/example4.jpg',
        'http://example.com/images/example5.jpg',
        'http://example.com/images/example6.jpg',
        'http://example.com/images/example7.jpg',
        'http://example.com/images/example8.jpg',
        'http://example.com/images/example9.jpg',
        'http://example.com/images/example10.jpg',
        'http://example.com/images/example11.jpg',
        'http://example.com/images/example12.jpg',
        'http://example.com/images/example13.jpg',
        'http://example.com/images/example14.jpg',
        'http://example.com/images/example15.jpg',
        'http://example.com/images/example15.jpg',
        'http://example.com/images/example17.jpg',
        'http://example.com/images/example18.jpg',
        'http://example.com/images/example19.jpg',
        'http://example.com/images/example20.jpg',
    ];

    public function run()
    {
        Eloquent::unguard();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < Config::get('seeding.users'); $i++) {

            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'active' => $i === 0 ? true : rand(0, 1),
                'gender' => rand(0, 1) ? 'male' : 'female',
                'timezone' => mt_rand(-10, 10),
                'birthday' => rand(0, 1) ? $faker->dateTimeBetween('-40 years', '-18 years') : null,
                'location' => rand(0, 1) ? "{$faker->city}, {$faker->state}" : null,
                'had_feedback_email' => (bool)rand(0, 1),
                'sync_name_bio' => (bool)rand(0, 1),
                'bio' => $faker->sentence(100),
                'picture_url' => $this->picture_url[rand(0, 19)],
            ]);
        }
    }

}
