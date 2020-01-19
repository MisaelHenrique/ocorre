<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedidasTable Test Case
 */
class MedidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedidasTable
     */
    public $Medidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Medidas',
        'app.Ocorrencias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Medidas') ? [] : ['className' => MedidasTable::class];
        $this->Medidas = TableRegistry::getTableLocator()->get('Medidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Medidas);

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
