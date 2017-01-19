# Wordpress Starter Kit

*Brought to you by [thePLAN](http://theplanworks.com)*

This Wordpress Starter Kit uses [Composer](http://getcomposer.org) to create a base installation of Wordpress with the following:

* [WordPress with Composer support](https://github.com/johnpbloch/wordpress)
* [PHP DotEnv](https://github.com/vlucas/phpdotenv)
* [WP DotEnv](https://github.com/scottjs/wp-dotenv)
* [InterconnectIT Search and Replace DB](https://github.com/interconnectit/Search-Replace-DB)

## Usage

1. Clone this repository
2. Run `composer install`
3. Update newly-created .env file with your site-specific information (DB Credentials, etc)
4. Run `composer generate-config-with-salts`
5. Once you're ready to migrate Wordpress, run `composer migrate`