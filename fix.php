<?php
$f = 'database/migrations/0001_01_01_000002_create_jobs_table.php';
$c = file_get_contents($f);
$c = str_replace("\$table->index(['connection', 'queue', 'failed_at']);", "// \$table->index(['connection', 'queue', 'failed_at']);", $c);
file_put_contents($f, $c);
