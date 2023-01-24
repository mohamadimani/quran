<?php include "include/header.php";


if (isset($_COOKIE['user_name']) and !empty(trim($_COOKIE["user_name"]))) {
    header("location:joz_list.php");
}

if (isset($_POST['login_btn'])) {
    set_cookie($_POST['name']);
    set_session($_POST['name']);
    if (isset($_SESSION['url'])) {
        header("location:" . $_SESSION['url']);
    } else {
        header("location:joz_list.php");
    }
}

if (isset($_GET['exit']) and $_GET['exit'] == 'exit') {
    clear_cookie('user_name');
    clear_session();
}


?>

    <style>

        .boxshadow {
            border: 1px solid silver;
            height: 250px;
            box-shadow: 0 0 8px #ffffff inset;
            background: rgba(197, 193, 225, 0.1);
            margin-top: 100px;
        }

        .font {
            font-size: 15px;
            font-family: costomfont;
            padding-right: 20px;
            color: white;
            margin: 45px auto 20px;
        }

        .label1 {
            width: 90%;
            height: 30px;
            margin-right: 5%;
            font-size: 15px;
            text-align: right;
        }

        .btn-login {
            width: 90%;
            margin-top: 25px;
            margin-right: 5%;
        }


    </style>


    <div class="row">
        <div class=" col-lg-4 col-lg-pull-4 col-sm-6 col-sm-pull-3 col-xs-10 col-xs-pull-1 col-md-4 col-md-pull-4 ">
            <form method="post" action="">
                <div class="  boxshadow">
                    <label for="exampleInputEmail1" class="font">نام و نام خانوادگی خود را وارد کنید!</label>
                    <input type="text" class="form-control label1" placeholder="نام ... " name="name">
                    <button type="submit" class="btn btn-success btn-sm btn-block btn-login" name="login_btn"> ورود
                    </button>
                </div>
            </form>
        </div>
    </div>


<?php include "include/footer.php"; ?>