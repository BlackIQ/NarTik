<?php

if (count($tik) > 0) {
    if ($tik[0] == false) {
        echo '<h2>تیکت پیدا نشد</h2>';
    }
    else {
        ?>
        <div>
            <b><?php echo $tik[0]['tikid']; ?></b>
            <hr>
            <h3><b><?php echo $tik[0]['title']; ?></b></h3>
            <h3><?php echo $tik[0]['explane']; ?></h3>
            <br>
            <p>Sent in : <?php echo $tik[0]['dt']; ?></p>
            <br>
            <h3>Answer</h3>
            <p>
                <?php
                    if ($tik[0]['answer'] == 'ny') {
                        echo 'No answers yet';
                    }
                    else {
                        echo $tik[0]['answer'];
                    }
                ?>
            </p>
        </div>
        <?php
    }
}
else {
    echo '<h2>یک تیکت را انتخاب کنید</h2>';
}

?>