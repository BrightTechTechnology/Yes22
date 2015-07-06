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
		Model::unguard();
		// Staff
		\App\User::create([
			'username' => 'gkuschnik',
			'officialname' => 'Gerhard',
			'email' => 'kuschnik.gerhard@gmail.com',
			'password' => Hash::make('homepage88'),
			'staff' => true,
			'supplier' => false,
			]);

		\App\User::create([
			'username' => 'gkuschnik2',
			'officialname' => 'Gerdi',
			'email' => 'kuschnik2.gerhard@gmail.com',
			'password' => Hash::make('homepage88'),
			'staff' => true,
			'supplier' => true,
			]);

		// Supplier
		\App\User::create([
			'username' => 'mani',
			'officialname' => 'Mani Cheung',
			'email' => 'mani@mani-healing.com',
			'password' => Hash::make('Schaumbad'),
			'staff' => false,
			'supplier' => true,
			]);

		// User
		\App\User::create([
			'username' => 'fengelhardt',
			'officialname' => 'Felix Engelhardt',
			'email' => 'fengelh@gmail.com',
			'password' => Hash::make('Schaumbad'),
			'staff' => false,
			'supplier' => false,
			]);

		// Articles
		\App\Article::create([
			'title' => 'this is an article',
			'content' => 'this is the article content',
			'active' => true,
			'user_id' => 2,
		]);

	}

}
