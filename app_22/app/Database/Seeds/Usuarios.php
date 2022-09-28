<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        //data insertion for users
        $users = [
            [
                'username' => 'daniel@gmail.com',
                'passwrd' => 'Aaaaaa1'
            ],
            [
                'username' => 'priscila@gmail.com',
                'passwrd' => 'Bbbbbb2'
            ],
            [
                'username' => 'sapup3@gmail.com',
                'passwrd' => 'Cccccc3'
            ]
            ];

            $db = db_connect();
            foreach($users as $user){

                $params = [
                    'username' => $user['username'],
                    'passwrd' => password_hash($user['passwrd'], PASSWORD_DEFAULT)
                ];

                $db->query("INSERT INTO users(username, passwrd) VALUES(AES_ENCRYPT(:username:, UNHEX(SHA2('".AES_KEY."', 512))), :passwrd:)", $params);
            }

            echo 'Terminado!'.PHP_EOL;
    }
}
