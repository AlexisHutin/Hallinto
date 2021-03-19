<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class UpdateUsersRoleId extends AbstractMigration
{
    public function up()
    {
        $this->table('Users')
            ->changeColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {
    }
}
