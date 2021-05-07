<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\AcountingEntriesHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\AcountingEntriesHelper Test Case
 */
class AcountingEntriesHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\AcountingEntriesHelper
     */
    protected $AcountingEntries;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->AcountingEntries = new AcountingEntriesHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AcountingEntries);

        parent::tearDown();
    }
}
