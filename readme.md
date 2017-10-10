# Wordpress Starter Kit

*Brought to you by [thePLAN](http://theplanworks.com)*

This Wordpress Starter Kit uses [Composer](http://getcomposer.org) to create a base installation of Wordpress with the following:

* [WordPress with Composer support](https://github.com/johnpbloch/wordpress)
* [PHP DotEnv](https://github.com/vlucas/phpdotenv)
* [InterconnectIT Search and Replace DB](https://github.com/interconnectit/Search-Replace-DB)
* [Laravel Mix](https://github.com/JeffreyWay/laravel-mix)

## Usage

1. Clone this repository
2. Run `composer install`
3. Update newly-created .env file with your site-specific information (DB Credentials, etc)
4. Run `composer generate-config-with-salts`
5. Run `yarn`
6. Once you're ready to migrate Wordpress, run `composer migrate`

## Remote file sync
1. Update .env with host `SYNC_HOST` and folder `SYNC_REMOTE_FOLDER` for site on remote machine.
2. Run sync via npm `yarn sync:up` or `npm run sync:up`
3. You can also sync files down first with `yarn sync:down`
