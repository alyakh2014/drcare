#!/bin/sh
#
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer.phar
alias composer='/usr/local/bin/composer.phar'
composer --version
php composer install
php ./vendor/bin/codecept run
