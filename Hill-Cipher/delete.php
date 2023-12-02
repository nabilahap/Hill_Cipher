<?php
// Koneksi ke Database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hill_cipher';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare DELETE query
    $delete_query = "DELETE FROM hasil_hill_cipher WHERE id = ?";
    $stmt = mysqli_prepare($conn, $delete_query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("Location: data.php?message=success");
            exit(); // Make sure to exit after a header redirect
        } else {
            header("Location: data.php?message=error");
            exit();
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle error if preparation fails
        die("Error preparing DELETE statement: " . mysqli_error($conn));
    }
} else {
    header("Location: data.php?message=error");
    exit();
}

mysqli_close($conn);
?>
