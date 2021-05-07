<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingEntryTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingEntryTypeTable Test Case
 */
class AccountingEntryTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingEntryTypeTable
     */
    protected $AccountingEntryType;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AccountingEntryType',
        'app.AccountingEntries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingEntryType') ? [] : ['className' => AccountingEntryTypeTable::class];
        $this->AccountingEntryType = $this->getTableLocator()->get('AccountingEntryType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AccountingEntryType);

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
}
