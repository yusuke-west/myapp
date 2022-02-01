<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateServices extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('services');
        $table->addColumn('title','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'サービス名',
        ]);
        $table->addColumn('time','integer',[
            'default' => null,
            'null' => false,
            'signed' => false,
            'comment' => '所要時間',
        ]);
        $table->addColumn('price','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => '価格',
        ]);
        $table->addColumn('deleted_at','datetime',[
            'default' => null,
            'null' => true,
            'comment' => '削除日時',
        ]);
        $table->addColumn('updated_at','datetime',[
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
            'comment' => '更新日時',
        ]);
        $table->addColumn('created_at','datetime',[
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
            'comment' => '作成日時',
        ]);
        $table->create();
    }
}
