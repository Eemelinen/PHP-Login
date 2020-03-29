<?php

    include "db.php";

    // Create
    function createUser() {
        global $connection;
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $query = "INSERT INTO users (username, password) ";
            $query .= "VALUES ('$username', '$password')";
    
            $result = mysqli_query($connection, $query);
    
            if (!$result) {
                die('Query failed!' . mysqli_error($connection));
                echo 'try this';
            } else {
                echo "New user created.";
                echo "<br> Username: $username";
                echo "<br> Password: $password";
            }
        }
    }

    //Read
    function fetchAllUsers() {

        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        }
        return $result;
    }

    // Fetch Ids
    function fetchIds() {

        global $connection;

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query failed!' . mysqli_error($connection));
        }

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    // UPDATE
    function updateUser() {

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Connection failed" . mysqli_error($connection);
        } else {
            echo "Change was succesful!";
        }
    }

    function deleteUser() {

        global $connection;

        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Connection failed" . mysqli_error($connection);
        } else {
            echo "Delete was succesful.";
        }
    }

?>
