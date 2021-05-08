<html>

<?php
include "../config.php";
include BASE_PATH . "meta.php";
?>
<link rel="stylesheet" href="<?= URL; ?>/css/add_score.css">
<body>

<?php
require BASE_PATH . "header.php";
?>

<?php


ini_set("display_errors", 1);
//print_r($_REQUEST);
$arr = $_REQUEST ?? [];
$fio = $arr["fio"];
$score = $arr["score"];


?>

<!--контент -->
<div class="block content-wrapper">

    <div class="block content">


        <?php
        if (!empty($fio)) { ?>
            <div class="score_result">

                Информация успешно добавлена:
                <table id="table1" class="mytable" border=1>
                    <thead>
                    <tr>
                        <th class="asd">ключ</th>
                        <th>Значние</th>
                    </tr>
                    </thead>
                    <?php
                    foreach ($arr as $key => $value) {
                        //echo $key.":".$value."<br></br>";
                        echo "<tr>
                <td>" . $key . "</td>
                <td>" . $value . "</td>
              </tr>";
                    }
                    ?>
                </table>
            </div>
        <?php
        } ?>

        <div id="about">
        <span class='about-title'>
              форма отправки
        </span>

            <form class="myform" action="<?= URL_PAGES ?>/add_score.php" method="get">

                <div>
                    <label>Имя ученика:</label>
                    <select name="fio">
                        <?php
                        foreach ($students as $row) {
                            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                        }
                        ?>
                    </select>

                </div>

                <div>
                    <label>Оценка</label>
                    <select name="score">
                        <?php
                        foreach ($score_list as $key=>$score) {
                           echo '<option value='.$key.'>'.$score.'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label>Сдал ДЗ</label>
                    <input name="enable" type="checkbox" size="40">
                </div>

                <div>
                    <label class="block">Описание</label>
                    <textarea name="description"></textarea>
                </div>

                <div>
                    <input type="submit" value="Отправить">
                </div>
            </form>

        </div>

    </div>

    <?php
    include BASE_PATH . '' . 'menu.php'
    ?>
</div>

<!--подвал -->
<?php
include BASE_PATH . 'footer.php';
?>

</body>


</html>