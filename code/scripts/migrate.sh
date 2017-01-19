#!/bin/sh

# Migrate DB from one domain to another

echo "Enter the current full base URL (eg: http://mysite.dev), followed by [ENTER]:"

read current_url

echo "Enter the destination full base URL (eg: http://mysite.com), followed by [ENTER]:"

read dest_url

source .env

php ./vendor/interconnectit/search-replace-db/srdb.cli.php -h DB_HOST -n DB_DATABASE -u DB_USERNAME -p DB_PASSWORD -s $current_url -r $dest_url

echo "Done!"