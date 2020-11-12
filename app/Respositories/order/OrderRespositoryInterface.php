<?php
namespace App\Respositories\Order;
use App\Respositories\BaseRepositoryInterface;

interface OrderRespositoryInterface extends BaseRepositoryInterface{
    public function chanceDisband($id);
    public function chanceSuccess($id);
}