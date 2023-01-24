<?php include "header.php";

if (isset($_GET['juz'])) {
    $juz = $_GET['juz'];
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $audio = 0;

        if ($juz == 1) {
            $audio = '00' . $page;
        } else if ($juz > 1 and $juz < 30) {

            $audio = (($juz - 1) * 20) + 1 + $page;
            if ($audio < 100) {
                $audio = '0' . $audio;
            }
        }
    } else {
        header("location:page_list.php?juz=" . $_GET['juz']);
    }
} else {
    header("location:joz_list.php");
}


$settings["user_name"] = [];
if (isset($_GET['juz']) and isset($_GET["page"])) {
    if (is_dir("../data/j" . $_GET['juz'])) {
        if (is_file("../data/j" . $_GET['juz'] . "/p" . $_GET["page"] . ".php")) {
            $settings = parse_ini_file("../data/j" . $_GET['juz'] . "/p" . $_GET["page"] . ".php");
            if (!empty($settings)) {
                $settings['user_name'] = array_values(array_filter($settings['user_name']));
            }
        }
    }
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
        <h4 style="font-weight: bold;text-align: center"> لیست خوانندگان صفحه <span
                    style="color: #ff0000;"><?= $audio ?></span>
            قرآن، جزء
            <span  style="color: #ff0000;"><?= $_GET['juz'] ?></span>
            <a href="page_list.php?juz=<?= $_GET['juz'] ?>" class="btn btn-info" style="margin-right: 100px">بازگشت</a>
        </h4>

        <br>
        <table class="table  ">
            <thead>
            <tr>
                <td colspan="4">
                    ردیف
                </td>
                <td colspan="4">
                    نام
                </td>
                <td colspan="4">
                    وضعیت
                </td>
            </tr>
            </thead>
            <tbody>

            <?php
            if (!empty($settings)) {
                foreach ($settings["user_name"] as $key => $read) { ?>
                    <tr>
                        <td colspan="4">
                            <?= $key + 1 ?>
                        </td>
                        <td colspan="4">
                            <?= $read ?>
                        </td>
                        <td colspan="4">
                            خوانده
                        </td>
                    </tr>
                <?php }
            } ?>

            </tbody>
        </table>

    </div>
</div>

<?php include "footer.php"; ?>
