#!/bin/sh
#
# #This is a script that greets the world
# Usage: ./hello
clear
alias cept="./vendor/bin/codecept"
cept build
cept run