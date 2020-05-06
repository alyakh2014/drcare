#!/bin/sh
#
# #This is a script that greets the world
# Usage: ./hello
#clear
php composer install
php ./vendor/bin/codecept run
