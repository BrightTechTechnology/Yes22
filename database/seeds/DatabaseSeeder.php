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
			'name' => 'gkuschnik',
			'email' => 'kuschnik.gerhard@gmail.com',
			'password' => Hash::make('homepage88'),
			'staff' => true,
			'supplier' => false,
			]);

		\App\User::create([
			'name' => 'gkuschnik2',
			'email' => 'kuschnik2.gerhard@gmail.com',
			'password' => Hash::make('homepage88'),
			'staff' => true,
			'supplier' => true,
			]);

		// Supplier
		\App\User::create([
			'name' => 'mani',
			'email' => 'mani@mani-healing.com',
			'password' => Hash::make('Schaumbad'),
			'staff' => false,
			'supplier' => true,
			]);

		// User
		\App\User::create([
			'name' => 'fengelhardt',
			'email' => 'fengelh@gmail.com',
			'password' => Hash::make('Schaumbad'),
			'staff' => false,
			'supplier' => false,
			]);

	}

}
