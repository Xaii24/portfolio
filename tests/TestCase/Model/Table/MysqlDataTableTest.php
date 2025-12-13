<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MysqlDataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MysqlDataTable Test Case
 */
class MysqlDataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MysqlDataTable
     */
    protected $MysqlData;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.MysqlData',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MysqlData') ? [] : ['className' => MysqlDataTable::class];
        $this->MysqlData = $this->getTableLocator()->get('MysqlData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MysqlData);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MysqlDataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
