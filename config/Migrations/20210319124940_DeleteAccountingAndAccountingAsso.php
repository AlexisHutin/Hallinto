<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class DeleteAccountingAndAccountingAsso extends AbstractMigration
{
    public function up() {

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

        $this->table('accounting_entries')->drop()->save();
        $this->table('adds_accounting_entry')->drop()->save();

    }

    public function down() {

    }
}
