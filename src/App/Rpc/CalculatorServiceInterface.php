<?php
namespace App\Rpc;

interface CalculatorServiceInterface
{
    public function sum(int $a, int $b): int;
    public function multiply(int $a, int $b): int;
    public function times(int $a, int $b):int;
}