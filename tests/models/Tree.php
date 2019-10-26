<?php

namespace Tests\Models;

use Tianc\Admin\Traits\AdminBuilder;
use Tianc\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use AdminBuilder, ModelTree;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('tenant-admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('tenant-admin.database.menu_table'));

        parent::__construct($attributes);
    }
}
