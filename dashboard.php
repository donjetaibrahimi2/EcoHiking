 <?php
 
include "config.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit;
}


/* NUMRAT */
$totalUsers = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$totalGuides = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM guides"));

$camping = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings WHERE guide_category='camping'"));
$adventures = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings WHERE guide_category='adventures'"));
$winter = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings WHERE guide_category='winter'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>EcoHiking</h2>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>

        <li>
            <a href="#" onclick="toggleGuides()">Guides ▾</a>
        <div class="submenu" id="guidesMenu">
            
            <a href="guides-dashboard.php?cat=camping">Camping</a>
            <a href="guides-dashboard.php?cat=adventures">Adventures</a>
            <a href="guides-dashboard.php?cat=winter">Winter</a>
        </div>

        </li>

        <li><a href="Users.php">Users</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h2>Dashboard</h2>
        <p>Notifications</p>
    </div>

    <!-- CARDS -->
    <div class="cards">
        <div class="card">
            <h3>Admin</h3>
            <p>Logged in</p>
        </div>

        <div class="card">
            <h3>Total Users</h3>
            <p><?php echo $totalUsers; ?></p>
        </div>

        <div class="card">
            <h3>Total Guides</h3>
            <p><?php echo $totalGuides; ?></p>
        </div>
    </div>

    <!-- CHART -->
    <div class="chart-box">
        <h3>Most Bought Guides</h3>
        <canvas id="chart"></canvas>
    </div>

</div>

<script>
function toggleGuides(){
    const g = document.getElementById("guidesMenu");
    g.style.display = (g.style.display === "block") ? "none" : "block";
}

// Chart
new Chart(document.getElementById('chart'), {
    type: 'bar',
    data: {
        labels: ['Camping','Adventures','Winter'],
        datasets: [{
            label: 'Bookings',
            data: [<?= $camping ?>, <?= $adventures ?>, <?= $winter ?>],
            backgroundColor: ['#2e8b57','#3cb371','#5C4033'] // shades green & dark brown
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            title: { display: true, text: 'Most Booked Guides' }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
s
</script>

</body>
</html> 


