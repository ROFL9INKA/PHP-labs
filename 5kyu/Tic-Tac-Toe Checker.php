<?php
function is_solved($board) {
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2] && $board[$i][0] !== 0) {
            return $board[$i][0];
        }
        if ($board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i] && $board[0][$i] !== 0) {
            return $board[0][$i];
        }
    }

    if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] && $board[0][0] !== 0) {
        return $board[0][0];
    }
    if ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0] && $board[0][2] !== 0) {
        return $board[0][2];
    }

    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell === 0) {
                return -1; 
            }
        }
    }

    return 0;
}

$board = [
    [0, 0, 1],
    [0, 1, 2],
    [2, 1, 0]
];

$result = is_solved($board);

switch ($result) {
    case 1:
        echo "Победил X (1)\n";
        break;
    case 2:
        echo "Победил O (2)\n";
        break;
    case 0:
        echo "Ничья (0)\n";
        break;
    case -1:
        echo "Игра не закончена (-1)\n";
        break;
}
?>