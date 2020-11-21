<?php
include "db.php";

    function createData() {
        if (isset($_POST['submit'])) {
            global $connection;

            $username = $_POST['username'];
            $password = $_POST['password'];

            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);

            //Encrypting password
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystrings22";
            $hash_and_salt = $hashFormat . $salt;
            $password = crypt($password, $hash_and_salt);

            $query = "INSERT INTO users(username, password)";
            $query .= "VALUE ('$username', '$password')";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Query FAILED' . mysqli_error());
            } else {
                echo "Created $username";
            }
        }
    }

    function showAllData() {
        global $connection;

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query FAILED'.mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateData() {
        if(isset($_POST['submit'])) {
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "UPDATE users SET ";
            $query .= "username = '$username', "; // Added comma separator and missing ' and moved the " , then removed the extra whitespace
            $query .= "password = '$password' "; // Moved the " and removed the extra whitespace
            $query .= "WHERE id = $id ";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query FAILED" . mysqli_error($connection));
            } else {
                echo "Updated";
            }
        }
    }

    function deleteData() {
        if(isset($_POST['submit'])) {
            global $connection;
            $id = $_POST['id'];

            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id ";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query FAILED" . mysqli_error($connection));
            } else {
                echo "Deleted $id";
            }
        }
    }

    function readData() {
        global $connection;

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED' . mysqli_error());
        }

        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }

    }

