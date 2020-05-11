<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();

function clean($string) {
    $string = str_replace(' ', '', $string); // Removes all spaces.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 
    return preg_replace('/-+/', '', $string); // Removes multiple hyphens.
}

        $sql = "SELECT * FROM user_config"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        while ($row = $result->fetch_assoc()) {
        $username=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $username=clean($username);
        $date_time=date("Y-m-d h:i:s");

            $sql1 = "SELECT email FROM forum_users WHERE email='$email'"; 
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_num_rows($result1);
            if($row1 >= 1)
            {
                echo "####";
                echo $email;
                echo "<br>";
                echo "Skipped"
            }
            else
            {
                $sql2="INSERT INTO forum_users (username, nickname, email, is_email_confirmed, password, joined_at)
                VALUES ('$username', '$username', '$email', '1', '$password', '$date_time')";
                if ($conn->query($sql2) === TRUE)
                {

                    echo $email;
                    echo "--";
                    echo $password;
                    echo " added ";
                    echo "<br>";
                }
                else
                {
                    echo $conn->error;
                }
            }

        }

?>