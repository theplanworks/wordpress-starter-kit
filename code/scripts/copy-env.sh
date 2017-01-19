#!/bin/sh

# Copy the sample .env file if it does not exist

cp -n .env.sample .env
echo ".env file copied. Please update with site-specific information."