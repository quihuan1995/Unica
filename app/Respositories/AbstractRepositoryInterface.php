<?php
namespace App\Repositories;
use Illuminate\Database\Console\DumpCommand;
use Illuminate\Http\Request;

interface AbstractRepositoryInterface{
    public function getAll();
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function delete($id);
}
?>