<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $libros = [
			['titulo' => 'El principito', 'autor' => 'Antoine de Saint-Exupéry', 'editorial' => 'Trillas', 'anio_edicion' => '2010', 'numero_paginas' => '100'],
			['titulo' => 'Aura', 'autor' => 'Carlos Fuentes', 'editorial' => 'Trillas', 'anio_edicion' => '2010', 'numero_paginas' => '100'],
			['titulo' => 'El Perfume', 'autor' => 'Patrick Süskind', 'editorial' => 'Trillas', 'anio_edicion' => '2010', 'numero_paginas' => '100'],
			['titulo' => 'El hombre en busca de sentido', 'autor' => 'Viktor Frankl', 'editorial' => 'Trillas', 'anio_edicion' => '2010', 'numero_paginas' => '100'],
			['titulo' => 'El arte de la guerra', 'autor' => 'Sun Tzu', 'editorial' => 'Trillas', 'anio_edicion' => '2010', 'numero_paginas' => '100']
		];

        DB::table('libros')->insert($libros);
    }
}
