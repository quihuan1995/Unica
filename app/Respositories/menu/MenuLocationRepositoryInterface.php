<?php
namespace App\Repositories\menu;

interface MenuLocationReposiroryInterface{
    public function all();

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);
}