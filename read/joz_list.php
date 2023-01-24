<?php include "header.php";

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
        <h4 style="text-align: center;font-weight: bold"> <span>   بخش مدیریت </span>
        </h4>
        <br>
        <table class="table  ">
            <thead>
            <tr>
                <td colspan="4">
                    ردیف
                </td>
                <td colspan="4">
                    جزء
                </td>
                <td colspan="4">
                    صفحات
                </td>
            </tr>
            </thead>
            <tbody>

            <?php
            //            $all_joz = [
            //                "یک",
            //                "دو",
            //                "سه",
            //                "چهار",
            //                "پنج",
            //                "شش",
            //                "هفت",
            //                "هشت",
            //                "نه",
            //                "ده",
            //                "یازده",
            //                "دوازدهم",
            //                "سیزده",
            //                "چهارده",
            //                "پانزده",
            //                "شانزده",
            //                "هفده",
            //                "هجده",
            //                "نوزده",
            //                "بیست",
            //                "بیست و یک",
            //                "بیست و دو",
            //                "بیست و سه",
            //                "بیست و چهار",
            //                "بیست و پنج",
            //                "بیست و شش",
            //                "بیست و هفت",
            //                "بیست و هشت",
            //                "بیست و نه",
            //                "سی"
            //            ];
            //
            $all_joz = [
                            "یک",
                            "دو",
                            "سه",
                            "چهار",
                            "پنج",
                            "شش",
                            "هفت",
                            "هشت",
                            "نه",
                            "ده",
                          "یازده",
                            "دوازدهم",
                            "سیزده",
                            "چهارده",
                            "پانزده",
                            "شانزده",
                            "هفده",
                            "هجده",
                            "نوزده",
                            "بیست",
                            "بیست و یک",
                            "بیست و دو",
                            "بیست و سه",
                            "بیست و چهار",
                            "بیست و پنج",
                            "بیست و شش",
                            "بیست و هفت",
                           "بیست و هشت",
                            "بیست و نه",
                           "سی"


            ];
            foreach ($all_joz as $key => $joz) {
                ?>
                <tr>
                    <td colspan="4">
                        <?= $key + 1 ?>
                    </td>
                    <td colspan="4">
                        <?= $joz ?>
                    </td>
                    <td colspan="4">
                        <?php if (($key + 1) < 10) { ?>
                            <a href="page_list.php?juz=0<?= $key + 1 ?>" class="btn btn-info">مشاهده</a>
                        <?php } else { ?>
                            <a href="page_list.php?juz=<?= $key + 1 ?>" class="btn btn-info">مشاهده</a>
                        <?php } ?>
                    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>

