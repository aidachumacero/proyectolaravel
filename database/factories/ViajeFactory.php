<?php

namespace Database\Factories;

use App\Models\Viaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Viaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*return [
            'orifen'=> $this->faker->country,
            'destino'=>$this->faker->country,
            'fecha_hora_salida'=>$this->faker->datetime,
            'fecha_hora_llegada'=>$this->faker->country,datetime,
            'codigo_bus'=>$this->faker->country
        ];
        */
    }
}
