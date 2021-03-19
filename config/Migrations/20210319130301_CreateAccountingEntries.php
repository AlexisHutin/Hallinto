<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAccountingEntries extends AbstractMigration
{
    public function up() {
        $this->table('accounting_entries')
            ->addColumn('association_id', 'integer', [
                'limit' => 55,
                'null' => false,
            ])
            ->addColumn('type_of_accounting_entry_id', 'integer', [
                'limit' => 55,
                'null' => false,
            ])
            ->addColumn('event_id', 'integer', [
                'limit' => 55,
                'null' => true,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 15,
                'scale' => 2,
            ])
            ->addColumn('created_on', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_on', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();
    }

    public function down() {
        $this->table('accounting_entries')->drop()->save();

    }
}
