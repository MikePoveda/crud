<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
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
                'direccion'=>$faker->,
                'telefono'=>$faker->randomNumber($nbDigits=10),
                'nit'=>$faker->numberBetween($min=0,$max=9),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);

        }

    }
}
