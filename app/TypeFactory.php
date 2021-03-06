<?php
namespace App;

/**
 * Class TypeFactory
 * @package App
 */
class TypeFactory
{
    /**
     * @param $type
     * @return KingType|PawnType|RookType
     */
    public static function getType($type)
    {
        switch ($type) {
            case 'KING':
                return new KingType();
                break;
            case 'PAWN':
                return new PawnType();
                break;
            case 'ROOK':
                return new RookType();
                break;
            case 'BISHOP':
                return new BishopType();
                break;
            case 'QUEEN':
                return new QueenType();
                break;
            case 'HORSE':
                return new HorseType();
                break;
            default:
                return new PawnType();
        }
    }
}
