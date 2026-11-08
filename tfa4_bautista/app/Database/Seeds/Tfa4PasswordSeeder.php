<?php

namespace App\Database\Seeds;

use CodeIgniter\CLI\CLI;
use CodeIgniter\Database\Seeder;
use RuntimeException;

class Tfa4PasswordSeeder extends Seeder
{
    public function run()
    {
        $plainPassword = getenv('TFA4_DEMO_PASSWORD');

        if (! is_string($plainPassword) || strlen($plainPassword) < 8) {
            throw new RuntimeException(
                'Set the temporary TFA4_DEMO_PASSWORD environment variable to at least 8 characters.'
            );
        }

        $users = $this->db->table('users')
            ->select('id')
            ->where('password', null)
            ->get()
            ->getResultArray();

        if ($users === []) {
            throw new RuntimeException('No users with a missing password hash were found.');
        }

        foreach ($users as $user) {
            $this->db->table('users')
                ->where('id', $user['id'])
                ->update([
                    'password' => password_hash($plainPassword, PASSWORD_DEFAULT),
                ]);
        }

        CLI::write(count($users) . ' user password hashes were generated.', 'green');
    }
}
