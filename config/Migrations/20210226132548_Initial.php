<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {
        $this->table('accounting_entries', ['id' => false, 'primary_key' => ['id_accounting_entries']])
            ->addColumn('id_accounting_entries', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 15,
                'scale' => 2,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id',
                ]
            )
            ->addIndex(
                [
                    'id_association',
                ]
            )
            ->create();

        $this->table('adds_accounting_entry', ['id' => false, 'primary_key' => ['id_event', 'id_accounting_entries']])
            ->addColumn('id_event', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_accounting_entries', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_event',
                ]
            )
            ->addIndex(
                [
                    'id_accounting_entries',
                ]
            )
            ->create();

        $this->table('associations', ['id' => false, 'primary_key' => ['id_association']])
            ->addColumn('id_association', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('plan_type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('events', ['id' => false, 'primary_key' => ['id_event']])
            ->addColumn('id_event', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('event_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('start_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end_date', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('start_time', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end_time', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('location', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('has_type_of_event', ['id' => false, 'primary_key' => ['id_event', 'id']])
            ->addColumn('id_event', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_event',
                ]
            )
            ->addIndex(
                [
                    'id',
                ]
            )
            ->create();

        $this->table('holds_events', ['id' => false, 'primary_key' => ['id_association', 'id_event']])
            ->addColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_event', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_association',
                ]
            )
            ->addIndex(
                [
                    'id_event',
                ]
            )
            ->create();

        $this->table('members', ['id' => false, 'primary_key' => ['id_members']])
            ->addColumn('id_members', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('contribution_is_paid', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_association',
                ]
            )
            ->create();

        $this->table('references_event', ['id' => false, 'primary_key' => ['id_event', 'id_statistiques']])
            ->addColumn('id_event', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_statistiques', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_event',
                ]
            )
            ->addIndex(
                [
                    'id_statistiques',
                ]
            )
            ->create();

        $this->table('roles', ['id' => false, 'primary_key' => ['id_role']])
            ->addColumn('id_role', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('role', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('stat_type', ['id' => false, 'primary_key' => ['id_stat_type']])
            ->addColumn('id_stat_type', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('statistiques', ['id' => false, 'primary_key' => ['id_statistiques']])
            ->addColumn('id_statistiques', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_stat_type', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_association',
                ]
            )
            ->addIndex(
                [
                    'id_stat_type',
                ]
            )
            ->create();

        $this->table('type_of_accounting_entry')
            ->addColumn('type_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('icon', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('type_of_event')
            ->addColumn('type_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('icon', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('users', ['id' => false, 'primary_key' => ['id_user']])
            ->addColumn('id_user', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('id_association', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('id_role', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'id_association',
                ]
            )
            ->addIndex(
                [
                    'id_role',
                ]
            )
            ->create();

        $this->table('accounting_entries')
            ->addForeignKey(
                'id',
                'type_of_accounting_entry',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_association',
                'associations',
                'id_association',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('adds_accounting_entry')
            ->addForeignKey(
                'id_event',
                'events',
                'id_event',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_accounting_entries',
                'accounting_entries',
                'id_accounting_entries',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('has_type_of_event')
            ->addForeignKey(
                'id_event',
                'events',
                'id_event',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id',
                'type_of_event',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('holds_events')
            ->addForeignKey(
                'id_association',
                'associations',
                'id_association',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_event',
                'events',
                'id_event',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('members')
            ->addForeignKey(
                'id_association',
                'associations',
                'id_association',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('references_event')
            ->addForeignKey(
                'id_event',
                'events',
                'id_event',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_statistiques',
                'statistiques',
                'id_statistiques',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('statistiques')
            ->addForeignKey(
                'id_association',
                'associations',
                'id_association',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_stat_type',
                'stat_type',
                'id_stat_type',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'id_association',
                'associations',
                'id_association',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'id_role',
                'roles',
                'id_role',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {
        $this->table('accounting_entries')
            ->dropForeignKey(
                'id'
            )
            ->dropForeignKey(
                'id_association'
            )->save();

        $this->table('adds_accounting_entry')
            ->dropForeignKey(
                'id_event'
            )
            ->dropForeignKey(
                'id_accounting_entries'
            )->save();

        $this->table('has_type_of_event')
            ->dropForeignKey(
                'id_event'
            )
            ->dropForeignKey(
                'id'
            )->save();

        $this->table('holds_events')
            ->dropForeignKey(
                'id_association'
            )
            ->dropForeignKey(
                'id_event'
            )->save();

        $this->table('members')
            ->dropForeignKey(
                'id_association'
            )->save();

        $this->table('references_event')
            ->dropForeignKey(
                'id_event'
            )
            ->dropForeignKey(
                'id_statistiques'
            )->save();

        $this->table('statistiques')
            ->dropForeignKey(
                'id_association'
            )
            ->dropForeignKey(
                'id_stat_type'
            )->save();

        $this->table('users')
            ->dropForeignKey(
                'id_association'
            )
            ->dropForeignKey(
                'id_role'
            )->save();

        $this->table('accounting_entries')->drop()->save();
        $this->table('adds_accounting_entry')->drop()->save();
        $this->table('associations')->drop()->save();
        $this->table('events')->drop()->save();
        $this->table('has_type_of_event')->drop()->save();
        $this->table('holds_events')->drop()->save();
        $this->table('members')->drop()->save();
        $this->table('references_event')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('stat_type')->drop()->save();
        $this->table('statistiques')->drop()->save();
        $this->table('type_of_accounting_entry')->drop()->save();
        $this->table('type_of_event')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
