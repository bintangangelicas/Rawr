<?php
session_start();

if (empty($_POST['username']) && empty($_POST['email']) 
    && empty($_POST['first_name']) && empty($_POST['last_name'])
    && empty($_POST['address'])&& empty($_POST['pwd1']) && empty($_POST['pwd2'])) 
    {
        echo "<body>
            <script>
                alert('belum ada data ! ')
                window.location.replace('register.php')
            </script>
        </body>";
}

$username = $_POST['username'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$pwd1 = $_POST['password1'];
$pwd2 = $_POST['password2'];

function set_cookie() {
    global $username, $email, $first_name, $last_name, $address, $pwd1;
    $new = ['username' => $username, 
            'first_name' => $first_name,
            'last_name' => $last_name,
            'address' => $address,
            'email' => $email, 
            'password1' => $pwd1];
    setcookie('user', json_encode($new));
}

if (isset($_POST['submit'])) {
    if (!empty($username) && !empty($email) && !empty($first_name) && !empty($last_name) && !empty($address) && !empty($pwd1) && !empty($pwd2)) {
        if ($pwd1 != $pwd2) {
            echo "<body>
                <script>
                    alert('Password tidak sama');
                    window.location.replace('register.php');
                </script>
            </body>";
        } else {
            set_cookie();
            header("Location: login.php", true, 301);
            die();
        }
    } else {
        echo "<body>
                <script>
                    alert('Isi semua field!');
                    window.location.replace('register.php');
                </script>
            </body>";
    }
}

?>