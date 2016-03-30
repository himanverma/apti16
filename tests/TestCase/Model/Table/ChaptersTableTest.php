<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChaptersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChaptersTable Test Case
 */
class ChaptersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChaptersTable
     */
    public $Chapters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chapters',
        'app.subjects',
        'app.klasses',
        'app.que_subch'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Chapters') ? [] : ['className' => 'App\Model\Table\ChaptersTable'];
        $this->Chapters = TableRegistry::get('Chapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chapters);

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
