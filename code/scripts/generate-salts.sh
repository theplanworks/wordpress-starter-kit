#!/bin/bash

# Import config settings
source ".env"

SALT=$(curl -L https://api.wordpress.org/secret-key/1.1/salt/)
STRING='put your unique phrase here'
printf '%s\n' "g/$STRING/d" a "$SALT" . w | ed -s $APP_DOCROOT/wp-config.php