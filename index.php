<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOH - IT Assets Inventory</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        .header { background-color: #009688; color: white; padding: 15px; text-align: center; border-radius: 5px; }
        .container { max-width: 1000px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background-color: #00796b; color: white; }
        tr:hover { background-color: #f5f5f5; }
        .status-active { color: green; font-weight: bold; }
        .status-repair { color: orange; font-weight: bold; }
        .search-box { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        h2 { color: #333; }
    </style>
</head>
<body>

<div class="header">
    <h1>Ministry of Health</h1>
    <h3>IT Assets Inventory System</h3>
</div>

<div class="container">
    <h2>Device Dashboard</h2>
    <form method="GET" action="">
        <input type="text" class="search-box" name="search" placeholder="Search by Device Type or Serial Number...">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Device</th>
                <th>Model</th>
                <th>Serial No</th>
                <th>IP Address</th>
                <th>Location</th>
                <th>Assigned To</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Simulated Data Retrieval Logic
            $sql = "SELECT asset.*, employee.User_Name, location.Room_Number 
                    FROM asset 
                    JOIN employee ON asset.User_ID = employee.User_ID 
                    JOIN location ON asset.Loc_ID = location.Loc_ID";

            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql .= " WHERE Device_Type LIKE '%$search%' OR Serial_Number LIKE '%$search%'";
            }
            ?>
            <tr>
                <td>101</td>
                <td>Computer</td>
                <td>Dell OptiPlex 7090</td>
                <td>SN-1001</td>
                <td>192.168.1.50</td>
                <td>IT Dept - Room 202</td>
                <td>Ahmed Ali</td>
                <td class='status-active'>Active</td>
            </tr>
             <tr>
                <td>102</td>
                <td>Printer</td>
                <td>HP LaserJet Pro</td>
                <td>SN-1002</td>
                <td>192.168.1.51</td>
                <td>HR Dept - Room 105</td>
                <td>Sara Mohsen</td>
                <td class='status-active'>Active</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
