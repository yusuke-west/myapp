<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMembers extends AbstractMigration
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
        $table = $this->table('members');
        $table->addColumn('family_name', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => '姓',
        ]);
        $table->addColumn('first_name', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => '名',
        ]);
        $table->addColumn('family_name_kana', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'セイ',
        ]);
        $table->addColumn('first_name_kana', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'メイ',
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 50,
            'comment' => 'メールアドレス',
        ]);
        $table->addColumn('tel', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 20,
            'comment' => '電話番号',
        ]);
        $table->create();
    }
}
