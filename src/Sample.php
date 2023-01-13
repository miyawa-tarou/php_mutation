<?php
namespace MiyawaTarou\PhpMutation;

class Sample {

    public static function sample1(int $a, int $b): int
    {
        return $a ** $b;
    }

    public static function sample2(int $a, int $b): bool
    {
        if ($a * $b > 10) {
            return true;
        }
        return false;
    }

    public static function sample3(int $a, int $b): bool
    {
        if ($a > 5 || $b > 10) {
            return true;
        }
        return false;
    }

    public static function sample4(int $a): int
    {
        if ($a > 100) {
            $a *= 1000;
        }
        return $a;
    }

    public static function sample5(int $a): int
    {
        if ($a > 10) {
            $a **= 3;
        }
        return $a;
    }
}