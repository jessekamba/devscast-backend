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

use App\Entities\CategoriesEntity;
use Core\Repositories\Repository;

/**
 * Class CategoriesRepository
 * Abstraction for the categories table
 * @package App\Repositories
 * @author bernard-ng, https://bernard-ng.github.io
 */
class CategoriesRepository extends Repository
{

    /**
     * The table name in the database
     * @var string
     */
    protected $table = 'categories';


    /**
     * Entity class
     * @var CategoriesEntity
     */
    protected $entity = CategoriesEntity::class;
}
