<?php
    include "../model/pdo.php";
    include "../model/tool.php";

          $DS_quanhuyen=list_quanhuyen($_POST['cityID']);

            foreach ($DS_quanhuyen as $qh) {
              echo'
              <option value="'.$qh['maqh'].'">'.$qh['name'].'</option>
              ';
            }

    ?>