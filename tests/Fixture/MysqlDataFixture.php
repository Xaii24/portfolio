<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MysqlDataFixture
 */
class MysqlDataFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-18 21:34:04',
                'modified' => '2024-07-18 21:34:04',
            ],
        ];
        parent::init();
    }
}
