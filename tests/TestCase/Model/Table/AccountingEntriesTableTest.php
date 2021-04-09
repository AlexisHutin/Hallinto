<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingEntriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingEntriesTable Test Case
 */
class AccountingEntriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingEntriesTable
     */
    protected $AccountingEntries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AccountingEntries',
        'app.Associations',
        'app.TypeOfAccountingEntries',
        'app.Events',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingEntries') ? [] : ['className' => AccountingEntriesTable::class];
        $this->AccountingEntries = $this->getTableLocator()->get('AccountingEntries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AccountingEntries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
