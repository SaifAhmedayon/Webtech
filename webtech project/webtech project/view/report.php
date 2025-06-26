<!DOCTYPE html>
<html>
<head>
    <title>Reports and Graphs</title>
    <link rel="stylesheet" href="../css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>Income vs Expense Report</header>
<div class="container">
    <canvas id="incomeExpenseChart" width="400" height="200"></canvas>
    <br>
    <canvas id="categoryChart" width="400" height="200"></canvas>
    <nav><a href="home.php">Back to Dashboard</a></nav>
</div>

<script>
    const ctx1 = document.getElementById('incomeExpenseChart').getContext('2d');
    const incomeExpenseChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Income', 'Expense'],
            datasets: [{
                label: 'Amount',
                data: [3000, 2200], 
                backgroundColor: ['green', 'red']
            }]
        }
    });

    const ctx2 = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Food', 'Transport', 'Bills'],
            datasets: [{
                label: 'Expenses by Category',
                data: [500, 700, 1000], 
                backgroundColor: ['orange', 'blue', 'purple']
            }]
        }
    });
</script>

</body>
</html>
