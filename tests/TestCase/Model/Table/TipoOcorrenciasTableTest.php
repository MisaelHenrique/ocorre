<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoOcorrenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoOcorrenciasTable Test Case
 */
class TipoOcorrenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoOcorrenciasTable
     */
    public $TipoOcorrencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TipoOcorrencias',
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
        $config = TableRegistry::getTableLocator()->exists('TipoOcorrencias') ? [] : ['className' => TipoOcorrenciasTable::class];
        $this->TipoOcorrencias = TableRegistry::getTableLocator()->get('TipoOcorrencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoOcorrencias);

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
