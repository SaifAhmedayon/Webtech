<?php
require_once("../db.php");

function insertBudget($category, $goal_amount, $goal_month) {
    $conn = createCon();
    $sql = "INSERT INTO budget_goals (category, goal_amount, goal_month) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sds", $category, $goal_amount, $goal_month);
    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $status;
}

function getAllBudgets() {
    $conn = createCon();
    $sql = "SELECT * FROM budget_goals ORDER BY goal_month DESC";
    $result = mysqli_query($conn, $sql);
    $budgets = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $budgets;
}
