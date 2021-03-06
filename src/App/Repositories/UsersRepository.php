<?php
/**
 * This file is part of the devcast.
 *
 * (c) Bernard Ng <ngandubernard@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repositories;

use App\Entities\UsersEntity;
use Core\Repositories\Repository;

/**
 * Class UsersRepository
 * @package App\Repositories
 * @author bernard-ng, https://bernard-ng.github.io
 */
class UsersRepository extends Repository
{

    /**
     * The table name in the database
     * @var string
     */
    protected $table = 'users';

    /**
     * Entity class
     * @var UsersEntity
     */
    protected $entity = UsersEntity::class;
}
