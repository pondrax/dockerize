#!/usr/bin/env bash

cat /docker-entrypoint-initdb.d/postgresql.conf > /var/lib/postgresql/data/postgresql.conf
