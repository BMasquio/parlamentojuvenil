<?php

namespace App\Base;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model as Eloquent;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Model extends Eloquent implements Auditable
{
    use AuditableTrait;

    protected $dates = ['created_at', 'updated_at'];

    protected $columns = []; // add all columns from you table

    protected $eagerLoadableRelations = [];

    public function save(array $options = [])
    {
        $saved = parent::save($options);

        $this->setRelations(
            $this->load($this->eagerLoadableRelations)->getRelations()
        );

        return $saved;
    }

    public function scopeExclude($query, $value = [])
    {
        $columns = Schema::getColumnListing($this->table);

        return $query->select(array_diff($columns, (array) $value));
    }

    public static function getColumns()
    {
        $model = new static();

        return Schema::getColumnListing($model->table);
    }
}
