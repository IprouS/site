<html>

  <?php 
      include "meta.php";
  ?>
   <link rel="stylesheet" href="css/about.css">
  <body>

  <?php 
    require "header.php";
  ?>

<?php


ini_set("display_errors",1);
print_r($_REQUEST);
$arr=$_REQUEST??[];
$fio=$arr["fio"];
$score=$arr["score"];
echo $fio." ".$score;


?>

  <!--контент -->
  <div class="block content-wrapper">

    <div class="block content">

       
        <?php
        if (!empty($fio)) { ?>
              <div class="score_result">

          Информация об ученике:
          <table id="table1"  class="mytable" border=1>
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
                <td>".$key."</td>
                <td>".$value."</td>
              </tr>";
              }
              ?> 
            </table>
        </div>
        <?php }  ?>
   


      <div id="about">

        
  

        <span class= 'about-title'>
              форма отправки
        </span>

        <form class="myform" action="http://sasha/about.php" method="post">
         
          <div>
            <label>Имя</label>
            <input name="fio" type="text" size="40">
          </div>
          
          <div>
            <label>Оценка</label>
            <select name="score">
              <option value="1">Кол</option>
              <option value="2">Два</option>
              <option value="3">Удовлетворительно</option>
              <option value="4">Хорошо</option>
              <option value="5">Отлично</option>
            </select>
          </div>

          <div>
            <label>Сдал ДЗ</label>
            <input name="enable" type="checkbox" size="40">
          </div>

          <div>
            <label>Описание</label>
            <textarea name="description"></textarea>
          </div>

          <div>
          <input type="submit" value="Отправить">
          </div>
        </form>

      </div>

    </div>

  <?php
    include 'menu.php'
  ?>
  </div>

  <!--подвал -->
  <?php
      include 'footer.php';
  ?>

</body>



</html>