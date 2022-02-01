<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateStaffs extends AbstractMigration
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
        $table = $this->table('staffs');
        $table->addColumn('family_name','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => '姓',
        ]);
        $table->addColumn('first_name','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => '名',
        ]);
        $table->addColumn('family_name_kana','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'セイ',
        ]);
        $table->addColumn('first_name_kana','string',[
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'メイ',
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
