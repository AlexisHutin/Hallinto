<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\AccountingEntriesHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\AccountingEntriesHelper Test Case
 */
class AccountingEntriesHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\AccountingEntriesHelper
     */
    protected $AccountingEntries;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->AccountingEntries = new AccountingEntriesHelper($view);
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
}
