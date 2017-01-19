<?php

$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

// Migrate DB from one domain to another

$io = $this->getIO();

$current_url = $io->ask('Enter the current full base URL (eg: http://mysite.dev), followed by [ENTER]: ');
$dest_url = $io->ask('Enter the destination full base URL (eg: http://mysite.com), followed by [ENTER]: ');

source .env

exec('php ./vendor/interconnectit/search-replace-db/srdb.cli.php -h ' . getenv('DB_HOST') . ' -n ' . getenv('DB_DATABASE') . ' -u ' . getenv('DB_USERNAME') . ' -p ' . getenv('DB_PASSWORD') . ' -s ' . escapeshellarg($current_url) . ' -r ' . escapeshellarg($dest_url));

echo "Done!"