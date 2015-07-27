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

        for($i=0; $i<4; $i++) {
            foreach ($themes as $theme) {
                // Staff
                \App\User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'staff' => true,
                    'supplier' => false,
                    'theme' => $theme,
                    'profile' => $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs,
                ]);

                // Supplier
                \App\User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'staff' => false,
                    'supplier' => true,
                    'theme' => $theme,
                    'profile' => $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs,
                ]);

                // staff and supplier
                \App\User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'staff' => true,
                    'supplier' => true,
                    'theme' => $theme,
                    'profile' => $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs,
                ]);

                // User
                \App\User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'staff' => false,
                    'supplier' => false,
                    'theme' => $theme,
                    'profile' => $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs,
                ]);

                // Article
                \App\Article::create([
                    'title' => $faker->catchPhrase,
                    'content' => $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs . ' ' . $faker->bs,
                    'active' => true,
                    'user_id' => 3,
                    'theme' => $theme,
                ]);
            }
        }
	}

}
