#!/bin/bash
rsync -aux --exclude '.git' --exclude '_old3' --exclude '_OLD2' ../ ../_old3
chmod -R 777 /var/www