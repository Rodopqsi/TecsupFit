<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $categorias = [
            ['nombre' => 'Electrónicos', 'descripcion' => 'Productos electrónicos y tecnología'],
            ['nombre' => 'Ropa', 'descripcion' => 'Vestimenta y accesorios'],
            ['nombre' => 'Hogar', 'descripcion' => 'Productos para el hogar'],
            ['nombre' => 'Deportes', 'descripcion' => 'Artículos deportivos'],
            ['nombre' => 'Libros', 'descripcion' => 'Libros y material educativo'],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
