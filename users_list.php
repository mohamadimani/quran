<?php include "include/header.php"; ?>


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


                <tr>
                    <td colspan="4">
                        1
                    </td>
                    <td colspan="4">
                        علی
                    </td>
                    <td colspan="4">
                        خوانده
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        2
                    </td>
                    <td colspan="4">
                        رضا
                    </td>
                    <td colspan="4">
                        نخوانده
                    </td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>

<?php include "include/footer.php"; ?>
