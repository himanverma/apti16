<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubchaptersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubchaptersTable Test Case
 */
class SubchaptersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubchaptersTable
     */
    public $Subchapters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subchapters',
        'app.chapters',
        'app.subjects',
        'app.klasses',
        'app.que_subch',
        'app.ques'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Subchapters') ? [] : ['className' => 'App\Model\Table\SubchaptersTable'];
        $this->Subchapters = TableRegistry::get('Subchapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subchapters);

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
