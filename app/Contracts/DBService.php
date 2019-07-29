<?php
namespace App\Contracts;

interface DBService
{
    public function index($sql);
    public function cont($sql);
    public function select($sql);
}