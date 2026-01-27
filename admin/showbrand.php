<?php
include_once 'lib.php'; // This file should define $connect
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM laptop WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">Laptop Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM laptop");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>



    
</div>




<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM pc WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">Desktop Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM pc");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>



    
</div>





<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM components WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">components Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM components");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>



<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM asso WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">Associries Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM asso");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>


    
</div>





<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM software WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">Software Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM software");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>


    
</div>


<?php


/* DELETE LOGIC */
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM used WHERE brand_id = $delete_id";
    mysqli_query($connect, $sql);
}
?>

<div class="container mt-5">
    <h3 class="mb-4">used Brands</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM used");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['brand_id']; ?></td>
                    <td><?= $row['brand']; ?></td>
                    <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                            <input type="hidden" name="delete_id" value="<?= $row['brand_id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>


    
</div>




</body>
</html>