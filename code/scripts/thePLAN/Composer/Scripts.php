<?php

namespace thePLAN\Composer;

use Composer\Script\Event;
use Dotenv\Dotenv;

class Scripts
{
    public static function migrate(Event $event)
    {
        $composer = $event->getComposer();
        $io = $event->getIO();

        $vendorPath = $composer->getConfig()->get('vendor-dir');
        $dotenv = Dotenv::createMutable(dirname($vendorPath));
        $dotenv->load();

        // Migrate DB from one domain to another
        $current_url = $io->ask('Enter the current full base URL (eg: http://mysite.dev), followed by [ENTER]: ');
        $dest_url = $io->ask('Enter the destination full base URL (eg: http://mysite.com), followed by [ENTER]: ');
        $output= [];

        exec('php ./vendor/interconnectit/search-replace-db/srdb.cli.php -h ' . getenv('DB_HOST') . ' -n ' . getenv('DB_DATABASE') . ' -u ' . getenv('DB_USERNAME') . ' -p "' . getenv('DB_PASSWORD') . '" -s ' . escapeshellarg($current_url) . ' -r ' . escapeshellarg($dest_url), $output);

        $io->write(implode("\r\n", $output));
        $io->write("Done!");
    }
}
