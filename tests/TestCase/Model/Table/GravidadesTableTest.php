<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GravidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GravidadesTable Test Case
 */
class GravidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GravidadesTable
     */
    public $Gravidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Gravidades',
        'app.Ocorrencias',
        'app.TipoOcorrencias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gravidades') ? [] : ['className' => GravidadesTable::class];
        $this->Gravidades = TableRegistry::getTableLocator()->get('Gravidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gravidades);

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
