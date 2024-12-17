<?php

namespace Src\helper\Enum;

enum Direction: string
{
    case Left = 'left';
    case Right = 'right';

    public function operation(string $operationName): string
    {
        return $operationName . $this->name;
    }

    public function opposite(): Direction
    {
        return match ($this) {
            Direction::Left => Direction::Right,
            Direction::Right => Direction::Left,
        };
    }
}
