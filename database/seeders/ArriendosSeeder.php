<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArriendosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arriendos')->insert([
            ['rut'=>'20704066-4','nombre'=>'Thomas','apellido'=>'Arriagada','email'=>'thomas@gmail.com','tipo'=>'coupe', 'fechaI'=>'27/03/2022', 'fechaI'=>'30/04/2022','patente'=>'AB1234'],
            ['rut'=>'21340268-6','nombre'=>'Felipe','apellido'=>'Uribe','email'=>'felipe@gmail.com','tipo'=>'sedan', 'fechaI'=>'15/02/2023', 'fechaI'=>'31/08/2023','patente'=>'BD8647'],
            ['rut'=>'19012987-1','nombre'=>'Camila','apellido'=>'Fernandez','email'=>'camila@gmail.com','tipo'=>'SUV', 'fechaI'=>'17/07/2023', 'fechaI'=>'17/06/2023','patente'=>'GZ4510'],
        ]);
    }
}
