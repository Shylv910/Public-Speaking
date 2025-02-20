<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
session_start(); // Pastikan session dimulai

include "../koneksi.php";

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Check if ID parameter is present
if (isset($_GET['id'])) {
    // Get the id from the URL
    $id = $_GET['id'];

    // Get the existing data for the id
    $sql = "SELECT * FROM datapendaftarleo WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        $row = $result->fetch_assoc();

        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];

            // Update the data in the database using prepared statement
            $update_sql = "UPDATE datapendaftarleo SET firstname=?, lastname=?, gender=?, email=?, nohp=? WHERE id=?";
            $stmt = $koneksi->prepare($update_sql);
            $stmt->bind_param('sssssi', $firstname, $lastname, $gender, $email, $nohp, $id);
            $stmt->execute();

            // Check the number of affected rows
            $cek = $stmt->affected_rows;

            if ($cek > 0) {
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                
                $_SESSION['status'] = "simpan";
                header("location:admin/datapendaftarLEO.php");
            } else {
                header("location:index.php?pesan=gagal");
            }
        }
    } else {
        echo "Error fetching record: " . $koneksi->error;
    }
} else {
    echo "No ID parameter provided!";
}

$koneksi->close();
?>

<form action="proses_updateL.php" method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">

    <label for="nohp">Phone Number</label>
    <input type="text" name="nohp" id="nohp" value="<?php echo $row['nohp']; ?>">

    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" value="<?php echo $row['gender']; ?>">

    <!-- Add more fields as needed -->

    <input type="submit" value="Submit">
</form>
</body>
</html>
