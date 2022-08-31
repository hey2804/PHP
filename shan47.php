<?php
    include('shanapis.php');

    $s1 = new Student('Shan',77,88,77);
    $s2 = new Student('Eric',77,66,55);
    $s3 = new Student('Emily',55,99,88);

    echo "{$s1->getName()}:{$s1->sum()}:{$s1->avg()}<br/>";
    echo "{$s2->getName()}:{$s2->sum()}:{$s2->avg()}<br/>";
    echo "{$s3->getName()}:{$s3->sum()}:{$s3->avg()}<br/>";
?>