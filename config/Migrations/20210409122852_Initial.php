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
        $this->table('accounting_entries')
            ->addColumn('association_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('accounting_entry_type_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('event_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 15,
                'scale' => 2,
            ])
            ->addColumn('reason', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'accounting_entry_type_id',
                ]
            )
            ->addIndex(
                [
                    'association_id',
                ]
            )
            ->create();

        $this->table('accounting_entry_type')
            ->addColumn('type_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('associations')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('association_type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('adresse', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('RNA_number', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('plan_type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('image_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('image_path', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('associations_events')
            ->addColumn('association_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('event_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'event_id',
                ]
            )
            ->addIndex(
                [
                    'association_id',
                ]
            )
            ->create();

        $this->table('event_type')
            ->addColumn('name', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('icon', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('events')
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
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('event_type_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'event_type_id',
                ]
            )
            ->create();

        $this->table('members')
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('birth_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('phone_number', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('contribution_is_paid', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('association_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('inscription_date', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'association_id',
                ]
            )
            ->create();

        $this->table('roles')
            ->addColumn('role', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('statistics')
            ->addColumn('association_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('statistics_type_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('data', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'statistics_type_id',
                ]
            )
            ->addIndex(
                [
                    'association_id',
                ]
            )
            ->create();

        $this->table('statistics_event')
            ->addColumn('event_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('statistics_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'statistics_id',
                ]
            )
            ->addIndex(
                [
                    'event_id',
                ]
            )
            ->create();

        $this->table('statistics_type')
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('users')
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('association_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('image_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('image_path', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addIndex(
                [
                    'role_id',
                ]
            )
            ->addIndex(
                [
                    'association_id',
                ]
            )
            ->create();

        $this->table('accounting_entries')
            ->addForeignKey(
                'accounting_entry_type_id',
                'accounting_entry_type',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'association_id',
                'associations',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('associations_events')
            ->addForeignKey(
                'event_id',
                'events',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'association_id',
                'associations',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('events')
            ->addForeignKey(
                'event_type_id',
                'event_type',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('members')
            ->addForeignKey(
                'association_id',
                'associations',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('statistics')
            ->addForeignKey(
                'statistics_type_id',
                'statistics_type',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'association_id',
                'associations',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('statistics_event')
            ->addForeignKey(
                'statistics_id',
                'statistics',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'event_id',
                'events',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'role_id',
                'roles',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'association_id',
                'associations',
                'id',
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
                'accounting_entry_type_id'
            )
            ->dropForeignKey(
                'association_id'
            )->save();

        $this->table('associations_events')
            ->dropForeignKey(
                'event_id'
            )
            ->dropForeignKey(
                'association_id'
            )->save();

        $this->table('events')
            ->dropForeignKey(
                'event_type_id'
            )->save();

        $this->table('members')
            ->dropForeignKey(
                'association_id'
            )->save();

        $this->table('statistics')
            ->dropForeignKey(
                'statistics_type_id'
            )
            ->dropForeignKey(
                'association_id'
            )->save();

        $this->table('statistics_event')
            ->dropForeignKey(
                'statistics_id'
            )
            ->dropForeignKey(
                'event_id'
            )->save();

        $this->table('users')
            ->dropForeignKey(
                'role_id'
            )
            ->dropForeignKey(
                'association_id'
            )->save();

        $this->table('accounting_entries')->drop()->save();
        $this->table('accounting_entry_type')->drop()->save();
        $this->table('associations')->drop()->save();
        $this->table('associations_events')->drop()->save();
        $this->table('event_type')->drop()->save();
        $this->table('events')->drop()->save();
        $this->table('members')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('statistics')->drop()->save();
        $this->table('statistics_event')->drop()->save();
        $this->table('statistics_type')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
