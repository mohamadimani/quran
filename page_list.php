<?php include "include/header.php";

if (!isset($_COOKIE['user_name']) and empty(trim($_COOKIE['user_name']))) {
    header("location:login.php");
}

if (isset($_GET["read"]) and !empty(trim($_GET["read"]))) {
    save_read_data($_GET["juz"], $_GET["read"]);
    header("location:page_list.php?juz=" . $_GET["juz"]);
}


?>

<style>
    table td {
        text-align: center;
    }

    .container2 {
        border: 1px solid silver;
        box-shadow: 0 0 8px #ffffff inset;
        background: rgba(226, 221, 255, 0.8);
        margin-top: 100px;
    }


    thead {
        font-size: 16px;
        font-weight: bold;
    }

    .container tbody tr:nth-child(odd) {
        background-color: rgba(160, 244, 231, 0.27);
    }

</style>


<div class="row">
    <div class=" container2 col-lg-6 col-lg-pull-3  col-xs-10 col-xs-pull-1 col-md-4 col-md-pull-4 ">
        <br>
        <h4 style="font-weight: bold;text-align: center"> صفحات جزء <span
                    style="color: #ff0000;"><?= $_GET['juz'] ?></span></h4>
        <br>
        <table class="table  ">
            <thead>
            <tr>
                <td colspan="4">
                    ردیف
                </td>
                <td colspan="4">
                    صفحه
                </td>
                <td colspan="4">
                    خواندن صفحه
                </td>
            </tr>
            </thead>
            <tbody>

            <?php
            $all_pages = [
                21, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 20,
                20, 20, 23
            ];
            if (isset($_GET['juz'])) {
                for ($i = 1; $i <= $all_pages[$_GET['juz'] - 1]; $i++) {
                    if ($i < 10) {
                        $a = '0' . $i;
                    } else {
                        $a = $i;
                    }
                    ?>
                    <tr>
                        <td colspan="4">
                            <?= $i ?>
                        </td>
                        <td colspan="4">
                            صفحه <?= $i ?>
                        </td>
                        <td colspan="4">
                            <?php
                            $settings['user_name'] = [];
                            if (isset($_GET['juz'])) {
                                if (is_dir("data/j" . $_GET['juz'])) {
                                    if (is_file("data/j" . $_GET['juz'] . "/p" . $i . ".php")) {
                                        $settings = parse_ini_file("data/j" . $_GET['juz'] . "/p" . $i . ".php");
                                        if (!empty($settings)) {
                                            $settings['user_name'] = array_values(array_filter($settings['user_name']));
                                        }
                                    }
                                }
                            }

                            if ( !empty($settings) and in_array($_COOKIE["user_name"], $settings['user_name'])) {
//                            print_r($settings['user_name']);
//                            print_r(" - ");
//                            print_r($_COOKIE["user_name"]);
//                            die();
                                ?>
                                <a href="page.php?juz=<?= $_GET['juz'] ?>&page=<?= $i ?>&read=read" class="btn btn-success">خوانده
                                    ام</a>
                            <?php } else { ?>
                                <a href="page.php?juz=<?= $_GET['juz'] ?>&page=<?= $i ?>"
                                   class="btn btn-info">مشاهده</a>
                            <?php } ?>
                        </td>
                    </tr>

                <?php }
            } else {
                header("location:joz_list.php");
            } ?>

            </tbody>
        </table>

    </div>
</div>


<?php include "include/footer.php"; ?>
