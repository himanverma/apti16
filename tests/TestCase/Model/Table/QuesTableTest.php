<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuesTable Test Case
 */
class QuesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuesTable
     */
    public $Ques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Ques') ? [] : ['className' => 'App\Model\Table\QuesTable'];
        $this->Ques = TableRegistry::get('Ques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ques);

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
}
