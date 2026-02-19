<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('books')->insert([
            [
            
                'Titulo'=>'Don Quijote de la Mancha',
                'Descripcion'=>'Aventuras de un caballero loco',
                'ISBN'=>'9788424115531',
                'Copias_totales'=>5,
                'Copias_disponibles'=>5,
                'Estado'=>'True',
            ],
            [
                'Titulo'=>'Cien Años de Soledad',
                'Descripcion'=>'Historia de la familia Buendía',
                'ISBN'=>'9780307350435',
                'Copias_totales'=>3,
                'Copias_disponibles'=>3,
                'Estado'=>'True',
            ],
            [
                'Titulo'=>'Orgullo y Prejuicio',
                'Descripcion'=>'Novela de costumbres y amor',
                'ISBN'=>'9788467040418',
                'Copias_totales'=>4,
                'Copias_disponibles'=>4,
                'Estado'=>'True',
            ],
            [
                'Titulo' => 'Crimen y Castigo',
                'Descripcion' => 'Dilemas morales y justicia',
                'ISBN' => '9788420651330',
                'Copias_totales' => 2,
                'Copias_disponibles' => 2,
                'Estado' => 'True',
            ],
            [
                'Titulo' => 'El principito',
                'Descripcion' => 'Relato corto sobre la vida',
                'ISBN' => '9780156013987',
                'Copias_totales' => 10,
                'Copias_disponibles' => 10,
                'Estado' => 'True',
            ],
            [
                'Titulo' => '1984',
                'Descripcion' => 'Distopía política y vigilancia',
                'ISBN' => '9788466332514',
                'Copias_totales' => 6,
                'Copias_disponibles' => 6,
                'Estado' => 'True',
            ],
            [
                'Titulo' => 'La Odisea',
                'Descripcion' => 'Viaje Epico de Ulises',
                'ISBN' => '9788424924515',
                'Copias_totales' => 3,
                'Copias_disponibles' => 3,
                'Estado' => 'True',
            ],
            [
                'Titulo' => 'El Gran Gatsby',
                'Descripcion' => 'El sueño americano en los años 20',
                'ISBN' => '9788467036411',
                'Copias_totales' => 4,
                'Copias_disponibles' => 4,
                'Estado' => 'True',
            ],
            [
                'Titulo'=>'Rayuela',
                'Descripcion'=>'Novela experimental de Cortázar',
                'ISBN'=>'9788420431321',
                'Copias_totales'=>2,
                'Copias_disponibles'=>2,
                'Estado'=>'True',
            ],
            [
                'Titulo'=>'Hamlet',
                'Descripcion'=>'Tragedia de venganza y duda',
                'ISBN'=>'9788437600123',
                'Copias_totales'=>5,
                'Copias_disponibles'=>5,
                'Estado'=>'True',
            ],
/*             Books::factory()->count(90)->create(),
 */        ]);

    }
}
