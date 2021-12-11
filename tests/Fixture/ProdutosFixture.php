<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome_produto' => 'Lorem ipsum dolor sit amet',
                'categorias_produto_id' => 1,
                'created' => '2021-12-09 16:48:55',
                'modified' => '2021-12-09 16:48:55',
            ],
        ];
        parent::init();
    }
}
