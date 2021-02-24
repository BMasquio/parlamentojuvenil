<?php

namespace App\Data\Repositories;

use Illuminate\Support\Str;

class Repository
{
    protected $model;

    /**
     * @return mixed
     */
    public function getCurrentYear($year = null)
    {
        return get_current_year($year);
    }

    public function getCurrentRound($round = null)
    {
        return $round ?: config('app.election.round', 1);
    }

    protected function findByAnyColumnName($name, $arguments)
    {
        return $this->makeQueryByAnyColumnName('findBy', $name, $arguments)->first();
    }

    protected function getByAnyColumnName($name, $arguments)
    {
        return $this->makeQueryByAnyColumnName('getBy', $name, $arguments)->get();
    }

    protected function makeQueryByAnyColumnName($type, $name, $arguments, $query = null)
    {
        if (!$query) {
            $query = $this->model::query();
        }

        $columnName = snake_case(Str::after($name, $type));

        return $query->where($this->qualifyColumn($columnName), $arguments);
    }

    protected function qualifyColumn($name)
    {
        return $this->model()->qualifyColumn($name);
    }

    /**
     * @return mixed
     */
    public function new()
    {
        return new $this->model();
    }

    /**
     * @return mixed
     */
    public function model()
    {
        return $this->new();
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        if (starts_with($name, 'findBy')) {
            return $result = $this->findByAnyColumnName($name, $arguments);
        }

        if (starts_with($name, 'filterBy')) {
            return $result = $this->filterByAnyColumnName($name, $arguments);
        }

        if (starts_with($name, 'getBy')) {
            return $result = $this->getByAnyColumnName($name, $arguments);
        }

        throw new \Exception('Method not found: ' . $name);
    }

    protected function filterByAnyColumnName($columns, $arguments)
    {
        $query = $this->newQuery();

        coollect((array) $columns)->each(function ($column) use ($query, $arguments) {
            $this->makeQueryByAnyColumnName('filterBy', $column, $arguments, $query);
        });

        return $query;
    }
}
