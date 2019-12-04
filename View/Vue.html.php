<?php

require_once "Model/Entity/BoardingCards.php"; ?>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li> Votre départ est de <?= $card->getDeparture() ?>, et à destination de <?= $card->getArrival() ?>
            <br><?php if (!empty($card->getFlight_number())) {
                    echo 'Vous devrez prendre l\'avion n° :';
                } else {
                    echo "Vous devrez prendre le train n° :";
                }  ?>
            <?= $card->getFlight_number() ?>
            <?= $card->getBus_number() ?>
            en vous dirigeant à la porte n°<?= $card->getGate() ?>. <br>
            Sachez également que votre n° de siège est le suivant :<?= $card->getSeat() ?>
            </li>
    <?php endforeach; ?>
            </ul>