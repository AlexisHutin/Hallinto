<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class UpdateUserNullable extends AbstractMigration
{
    public function up()
    {
        $this->table('users')
            ->changeColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])

            ->changeColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->save();
    }

    public function down()
    {
    }
}
