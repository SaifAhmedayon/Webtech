<?php
require_once("../model/budgetModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $category = trim($_POST["category"]);
    $goal_amount = trim($_POST["goal_amount"]);
    $goal_month = $_POST["goal_month"];

    if (!empty($category) && !empty($goal_amount) && !empty($goal_month)) {
        $saved = insertBudget($category, $goal_amount, $goal_month);
        if ($saved) {
            header("Location: ../view/budget.php");
        } else {
            echo "Failed to save budget.";
        }
    } else {
        echo "All fields are required!";
    }
}
