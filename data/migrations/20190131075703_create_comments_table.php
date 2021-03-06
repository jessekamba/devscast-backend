<?php


use Phinx\Migration\AbstractMigration;

class CreateCommentsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('comments')
            ->addColumn('author', 'string')
            ->addColumn('email', 'string')
            ->addColumn('ip', 'string')
            ->addColumn('content', 'string', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::TEXT_LONG])
            ->addColumn('podcasts_id', 'integer')
            ->addColumn('confirmation_token', 'string', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::TEXT_MEDIUM])
            ->addColumn('confirmed_at', 'datetime')
            ->addColumn('created_at', 'datetime')
            ->addForeignKey('podcasts_id', 'podcasts', 'id')
            ->create();
    }
}
