<?php

use Illuminate\Database\Seeder;
use App\Producto;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<=99;$i++){
            Producto::create([
                'nombre'=> $faker->company,
                'descripcion'=>$faker->sentence,
                'precio'=>$faker->randomNumber($nbDigits=5),
                'cantidad'=>$faker->numberBetween($min=1000,$max=6800),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);

        }



    }
}
