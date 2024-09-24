<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Collection;

interface AbstractRepository {
    public function findAll(): Collection;
    public function findById(int $id);
    public function save(array $data);
    public function updateById(array $data, int $id);
    public function deleteById(int $id);
}
