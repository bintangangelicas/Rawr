<?php
    session_start();
    if (empty($_COOKIE['user'])) {
        echo "<body>
            <script>
                alert('Akun tidak terdaftar ! mohon buat akun terlebih dahulu')
                window.location.replace('login.php')
            </script>
        </body>";
    }

    $dec = json_decode($_COOKIE['user'], true);
    $get_username = $_POST['username'];
    $get_password = $_POST['password1'];

    function set_session() {
        global $get_username, $dec;
        session_start();
        $_SESSION['username'] = $get_username;
        $_SESSION['another'] = json_encode($dec);
        $_SESSION['name'] = $dec['first_name'] . " " . $dec['last_name'];
        setcookie('user', json_encode($dec));
    }

    if (isset($_POST['login'])) {
        if (in_array($get_username, $dec) && in_array($get_password, $dec)) {
            set_session();
            header("Location: index.php");
        } else {
            echo "<body>
                <script>
                    alert('username atau password salah ! ')
                    window.location.replace('login.php')
                </script>
            </body>";
        }
    }
    
?>