<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\indicadores::class, 50)->create()->each(function ($indicadores) {
        $indicadores->tipo_id()->save(factory(App\tipo::class)->make());
    });
    }
}
