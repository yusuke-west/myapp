<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddMemberIdToReservations extends AbstractMigration
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
        $table->addColumn('member_id', 'integer', [
            'default' => null,
            'null' => false,
            'signed' => false,
            'comment' => 'メンバーID',
            'after' => 'id',
        ]);
        $table->update();
    }
}
