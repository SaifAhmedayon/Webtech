<?php
require_once("../model/budgetModel.php");
$budgets = getAllBudgets();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Budget Goals</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<header>Set Your Budget Goals</header>
<div class="container">
    <form action="../controller/budgetController.php" method="post">
        <h3>Set Budget</h3>
        <input type="text" name="category" placeholder="Category (e.g. Food, Travel)" required>
        <input type="number" name="goal_amount" placeholder="Budget Amount" required>
        <input type="month" name="goal_month" placeholder="Month-Year" required>
        <button type="submit">Save Budget</button>
    </form>

    <h3>Current Budget Goals</h3>
    <table border="1" width="100%">
     <thead>    
        <tr>
            <th>Category</th>
            <th>Amount</th>
            <th>Month</th>
        </tr>
     </thead>
       <tbody>
                <?php if (!empty($budgets)): ?>
                    <?php foreach ($budgets as $budget): ?>
                        <tr>
                            <td><?= htmlspecialchars($budget['category']) ?></td>
                            <td>Tk <?= htmlspecialchars($budget['goal_amount']) ?></td>
                            <td><?= htmlspecialchars($budget['goal_month']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3" style="text-align:center;">No budget records found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

    <nav><a href="home.php">Back to Dashboard</a></nav>
</div>
</body>
</html>
