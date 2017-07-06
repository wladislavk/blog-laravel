#!/bin/sh

set -e

composer -n install

/usr/bin/sudo /usr/local/bin/apache2-foreground
