<?php

include 'slugify.php';

$string = 'Esse é o texto a ser trabalhado.          deixei espaço de propósito
 uma quebra de linha aqui';

echo slugify($string);//esse-e-o-texto-a-ser-trabalhado-deixei-espaco-de-proposito-uma-quebra-de-linha-aqui