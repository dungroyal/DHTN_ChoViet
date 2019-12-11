<?php
    include "../model/pdo.php";
    include "../model/tool.php";

          $DS_phuongxa=list_phuongxa($_POST['wardid']);

            foreach ($DS_phuongxa as $px) {
              echo'
              <option value="'.$px['xaid'].'">'.$px['name'].'</option>
              ';
            }

    ?>