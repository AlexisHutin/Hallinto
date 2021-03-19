<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatistiquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatistiquesTable Test Case
 */
class StatistiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatistiquesTable
     */
    protected $Statistiques;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Statistiques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Statistiques') ? [] : ['className' => StatistiquesTable::class];
        $this->Statistiques = $this->getTableLocator()->get('Statistiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Statistiques);

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
