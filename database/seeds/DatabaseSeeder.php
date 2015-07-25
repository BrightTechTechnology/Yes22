 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        $faker = Faker\Factory::create();

		Model::unguard();


        $themes = ['first1', 'gotarot', 'whitelabel'];

        foreach ($themes as $theme) {
            // Staff
            \App\User::create([
                'username' => $faker->firstName,
                'officialname' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'staff' => true,
                'supplier' => false,
                'theme' => $theme,
            ]);

            // Supplier
            \App\User::create([
                'username' => $faker->firstName,
                'officialname' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'staff' => false,
                'supplier' => true,
                'theme' => $theme,
            ]);

            // staff and supplier
            \App\User::create([
                'username' => $faker->firstName,
                'officialname' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('homepage88'),
                'staff' => true,
                'supplier' => true,
                'theme' => $theme,
            ]);

            // User
            \App\User::create([
                'username' => $faker->firstName,
                'officialname' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'staff' => false,
                'supplier' => false,
                'theme' => $theme,
            ]);

            // Article
            \App\Article::create([
                'title' => $faker->catchPhrase,
                'content' => $faker->bs.' '.$faker->bs.' '.$faker->bs.' '.$faker->bs.' '.$faker->bs,
                'active' => true,
                'user_id' => 3,
                'theme' => $theme,
            ]);
        }
	}

}
