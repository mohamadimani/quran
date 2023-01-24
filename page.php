<?php include "include/header.php";

if (isset($_GET['juz'])) {
    $juz = $_GET['juz'];
    if (isset($_GET['page'])) {
        if (!isset($_COOKIE['user_name'])) {
            $_SESSION['url'] = "page.php?juz=" . $_GET["juz"] . "&page=" . $_GET["page"];
            header("location:login.php");
        }


        $page = $_GET['page'];
        $audio = 0;

        if ($juz == 1) {
            if ($page < 10) {
                $audio = '00' . $page;
            }else{
                $audio = '0' . $page;
            }
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


?>


    <style>

        .container .read {


        }

        .container .video, .container .read {

            margin: 15px auto;
        }

        .page_title {
            padding: 15px 30px;
            margin: 60px auto;
            position: relative;

            background-color: rgba(63, 141, 70, 0.76);
        }

    </style>
    <br>
    <br>
    <br>
    <br>
    <h4 style="font-weight: bold;text-align: center;color: white">
        <span class="page_title">
        تلاوت قرآن جزء <span><?= @$juz ?></span> صفحه
        <span><?= @$audio ?></span>
        </span>
    </h4>
    <br>

    <div class="row">
        <div class="col-lg-8 col-lg-pull-4 video  col-xs-2 ">
            <audio controls style="margin-right: 15px">
                <source src="audio/menshavi/Joez<?= @$juz ?>/<?= @$audio ?>.mp3.MP3" type="audio/ogg">
            </audio>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-lg-pull-1 col-xs-12   ">
            <img src="img/quran/quran-<?= @$audio ?>.jpg" alt="" class="img-thumbnail">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-lg-pull-1 col-xs-12 read ">
            <?php if (isset($_GET['read'])) { ?>
                <a href="page_list.php?juz=<?= @$juz ?>"
                   class="btn btn-info col-lg-4 col-lg-pull-4 col-xs-4 col-xs-pull-4"> بازگشت </a>
            <?php } else { ?>
                <a href="page_list.php?juz=<?= @$juz ?>&read=<?= @$page ?>"
                   class="btn btn-info col-lg-4 col-lg-pull-4 col-xs-4 col-xs-pull-4"> خواندم </a>
            <?php } ?>
        </div>
    </div>

<?php include "include/footer.php"; ?>