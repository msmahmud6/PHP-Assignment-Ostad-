<?php
include "header.php";
require_once "../../app/classes/VehicleManager.php";
$vehicleManager = new VehicleManager("","","","");
$id = $_GET['id'] ?? null;
if($id === null){
    header("Location: ../index.php");
    exit();
}
$vehicles = $vehicleManager->getVehicles();
$vehicle = $vehicles[$id] ?? null;
if($vehicle === null){
    header("Location: ../index.php");
    exit();
}

?>
<body>
    <div class="container my-4">
        <h1>View Vehicle</h1>
        <div class="card">
            <img src="<?= $vehicle["image"] ?>" class="card-img-top" style="height: 300px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($vehicle["name"]) ?></h5>
                <p class="card-text">Type: <?= htmlspecialchars($vehicle["type"]) ?></p>
                <p class="card-text">Price: <?= htmlspecialchars($vehicle["price"]) ?> $</p>
                <a href="../index.php" class="btn btn-secondary">Back to List</a>
            </div>
</body>
</html>