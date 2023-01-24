<?php


function set_cookie($name)
{
    setcookie("user_name", $name, time() + (86400 * 600), "/"); // 86400 = 1 day
}

function set_session($name)
{
    $_SESSION["user_name"] = $name;
}

function clear_cookie($name)
{
    setcookie($name, $name, time() + 0, "/"); // 86400 = 1 day
}

function clear_session()
{
    session_destroy();

}

function save_read_data($juz, $page)
{
    if (isset($_COOKIE["user_name"]) and !empty(trim($_COOKIE["user_name"]))) {
        $data = "user_name[]=" . $_COOKIE["user_name"] . "\n";
        if (!is_dir("data/j" . $juz . "/")) {
            mkdir("data/j" . $juz . "/");
        }
        file_put_contents("data/j" . $juz . "/p" . $page . ".php", $data, FILE_APPEND);
        setcookie("read" . $juz . $page, "read", time() + (86400 * 600), "/");
    }
}