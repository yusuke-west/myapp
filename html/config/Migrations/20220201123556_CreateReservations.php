<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateReservations extends AbstractMigration
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
        $table = $this->table('reservations');
        $table->addColumn('reserved_at','datetime',[
            'default' => null,
            'null' => true,
            'comment' => '予約日',
        ]);
        $table->addColumn('staff_id','tinyinteger',[
            'default' => null,
            'null' => false,
            'signed' => false,
            'comment' => '担当スタッフ',
        ]);
        $table->addColumn('service_id','tinyinteger',[
            'default' => null,
            'null' => false,
            'signed' => false,
            'comment' => 'サービス',
        ]);
        $table->addColumn('status','tinyinteger',[
            'default' => null,
            'null' => false,
            'signed' => false,
            'comment' => 'ステータス',
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
