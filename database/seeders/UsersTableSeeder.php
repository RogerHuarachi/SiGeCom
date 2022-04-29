<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GG = User::create([
            'name'       => 'LUIS ALEJANDRO ARZE RICO',
            'email'      => 'proeza.ale@gmail.com',
            'password'      => bcrypt('proezaalejandro2021'),
            'agency_id'      => 1,
        ]);
        $GG->assignRole('Gerencia General');

        $DEC = User::create([
            'name'       => 'GUALBERTO EDSSON COCA VARGAS',
            'email'      => 'proeza.edsson@gmail.com',
            'password'      => bcrypt('proezaedsson2021'),
            'agency_id'      => 1,
        ]);
        $DEC->assignRole('Comercial');

        $OP = User::create([
            'name'       => 'JHOANA BRENDA JIMENEZ FLORES',
            'email'      => 'proeza.brenda@gmail.com',
            'password'      => bcrypt('proezabrenda2021'),
            'agency_id'      => 1,
        ]);
        $OP->assignRole('Operaciones');

        $TID = User::create([
            'name'       => 'ROGER HUARACHI TAPIA',
            'email'      => 'proeza.roger@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'agency_id'      => 1,
        ]);
        $TID->assignRole('TID');

        $EN = User::create([
            'name'       => 'ELIZABETH CALLE COAQUIRA',
            'email'      => 'proeza.elycalle@gmail.com',
            'password'      => bcrypt('proezaelycalle2021'),
            'agency_id'      => 1,
        ]);
        $EN->assignRole('Encargado Nacional');

        $EAS = [
            [
                'name'       => 'CARLA ANDREA CLAROS PEREDO',
                'email'      => 'proeza.carla22@gmail.com',
                'password'      => bcrypt('proezacarla222021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'ALEX GUERRA GUZMAN',
                'email'      => 'proeza.alex@gmail.com',
                'password'      => bcrypt('proezaalex2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROXANA LLANOS MAMANI',
                'email'      => 'proeza.roxana@gmail.com',
                'password'      => bcrypt('proezaroxana2021'),
                'agency_id'      => 4,
            ],
            [
                'name'       => 'LISCIEN MARIELA SANTALLA ANCE',
                'email'      => 'proeza.mariela@gmail.com',
                'password'      => bcrypt('proezamariela2021'),
                'agency_id'      => 5,
            ],
            [
                'name'       => 'VERONICA ANEIVA SALAZAR',
                'email'      => 'proeza.veronica@gmail.com',
                'password'      => bcrypt('proezaveronica2021'),
                'agency_id'      => 6,
            ],
        ];
        foreach ($EAS as $EA) {
            $userG = User::create([
                'name'       => $EA['name'],
                'email'       => $EA['email'],
                'password'       => $EA['password'],
                'agency_id'       => $EA['agency_id'],
            ]);
            $userG->assignRole('Encargado Sucursal');
        }


        $ASS = [
            [
                'name'       => 'JHONNY PEDRO HUAYHUASI SOLIS',
                'email'      => 'proeza.jhonny9@gmail.com',
                'password'      => bcrypt('proezajhonny92021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'MERY GARCIA AÑAMOR',
                'email'      => 'proeza.merygarcia@gmail.com',
                'password'      => bcrypt('proezamerygarcia2021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'PABLO CHOQUE CAYO',
                'email'      => 'proeza.pablochoque@gmail.com',
                'password'      => bcrypt('proezapablochoque2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ARACELY MONTOYA ANDIA',
                'email'      => 'proeza.aracely@gmail.com',
                'password'      => bcrypt('proezaaracely2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROCIO CLAROS ROJAS',
                'email'      => 'proeza.rocio@gmail.com',
                'password'      => bcrypt('proezarocio2021'),
                'agency_id'      => 4,
            ],
            [
                'name'       => 'ZULEMA IRIARTE TORRICO',
                'email'      => 'proeza.zulemairiarte@gmail.com',
                'password'      => bcrypt('proezarocio2021'),
                'agency_id'      => 4,
            ],
            [
                'name'       => 'NIDELVIA JIMÉNEZ HUARAYO',
                'email'      => 'proeza.nidelvia@gmail.com',
                'password'      => bcrypt('proezanidelvia2021'),
                'agency_id'      => 5,
            ],
            [
                'name'       => 'LIDIA LEQUIPE QUISPE',
                'email'      => 'proeza.lidia@gmail.com',
                'password'      => bcrypt('proezalidia92021'),
                'agency_id'      => 6,
            ],
            [
                'name'       => 'WILLIAMS YHAMIL SIRPA',
                'email'      => 'proeza.williams@gmail.com',
                'password'      => bcrypt('proezawilliams2021'),
                'agency_id'      => 6,
            ],
        ];
        foreach ($ASS as $AS) {
            $userG = User::create([
                'name'       => $AS['name'],
                'email'       => $AS['email'],
                'password'       => $AS['password'],
                'agency_id'       => $AS['agency_id'],
            ]);
            $userG->assignRole('Asesor');
        }
    }
}
