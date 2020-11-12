<?php
namespace App\Repositories;

use Illuminate\Http\Request;

interface BaseRepositoryInterface {
    /**
     * Get list data format Datatable
     *
     * @param $request - Illuminate\Http\Request;
     * @return array
     */
    public function findAllWithDatatable(Request $request);
    public function getAll();
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function delete($id);
    public function findById($id);
}