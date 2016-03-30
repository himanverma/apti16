<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QueSubchTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QueSubchTable Test Case
 */
class QueSubchTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QueSubchTable
     */
    public $QueSubch;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.que_subch',
        'app.subchapters',
        'app.ques',
        'app.chapters',
        'app.subjects',
        'app.klasses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QueSubch') ? [] : ['className' => 'App\Model\Table\QueSubchTable'];
        $this->QueSubch = TableRegistry::get('QueSubch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QueSubch);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
