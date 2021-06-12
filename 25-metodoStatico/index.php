<?php




class Math
{
    public static string $nome = 'Antonio';

    public static function somar($x, $y)
    {
        return $x + $y;
    }
}




echo Math::somar(23, 30);
echo Math::$nome;
