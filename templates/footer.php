<?php 
    $list = "SELECT phone, address, mail, days1, days2, hours1, hours2 FROM office";
                                                
    $rs_select = $bdd->prepare($list);
    $rs_select->execute();
                
    $donnees = $rs_select->fetch(PDO::FETCH_ASSOC);
?>
    <div>
        <h5>Nos bureaux</h5>
        <p>
        <i></i> 
         <?= $donnees['address'] ?>
        </p>
        <p>
            <i></i>
            <a href="tel: <?= $donnees['phone'] ?>" >
                    <?= $donnees['phone'] ?>
                </a>
        </p>
        <p >
            <i></i>
            <a href="mailto:<?= $donnees['mail'] ?>">
                <?= $donnees['mail'] ?>
            </a>
        </p>
        <h5 >Horaires d'ouverture</h5>
        <strong><?= $donnees['days1'] ?></strong>

        <p><?= $donnees['hours1'] ?></p>

        <strong><?= $donnees['days2'] ?></strong>

        <p><?= $donnees['hours2'] ?></p>

    </div>






