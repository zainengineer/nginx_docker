#!/usr/bin/env bash
wget https://rawgit.com/nginxinc/docker-nginx/master/mainline/jessie/Dockerfile -O source/Dockerfile
php create_dockerfile.php