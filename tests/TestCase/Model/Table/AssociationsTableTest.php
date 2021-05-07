<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssociationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssociationsTable Test Case
 */
class AssociationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssociationsTable
     */
    protected $Associations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Associations',
        'app.AccountingEntries',
        'app.Members',
        'app.Statistics',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Associations') ? [] : ['className' => AssociationsTable::class];
        $this->Associations = $this->getTableLocator()->get('Associations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Associations);

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
