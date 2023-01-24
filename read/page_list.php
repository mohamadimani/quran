<?php
include "header.php";

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
                    style="color: #ff0000;"><?= $_GET['juz'] ?></span>
            <a href="joz_list.php" class="btn btn-info" style="margin-right: 100px">بازگشت</a>
        </h4>
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
                    ?>
                    <tr>
                        <td colspan="4">
                            <?= $i ?>
                        </td>
                        <td colspan="4">
                            صفحه <?= $i ?>
                        </td>
                        <td colspan="4">
                            <a href="users_list.php?juz=<?= $_GET['juz'] ?>&page=<?= $i ?>"
                               class="btn btn-info">مشاهده</a>
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


<?php include "footer.php"; ?>
