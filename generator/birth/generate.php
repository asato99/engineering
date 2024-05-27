<?php
    include('../gene_pool/A1/a1_1/a1_1_solution.php');
    $content = <<<EOS
    <body>
    $a1_1
    </body>
    EOS;
    file_put_contents("../individual_pool/test.php", $content);