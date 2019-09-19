#!/usr/bin/env bash
cd $HOME

if [ ! -z $HEROKU_APP_NAME ]; then
    vendor/bin/wp core install \
        --url="${HEROKU_APP_NAME}.herokuapp.com" --title="WordPress Site" \
        --admin_user="admin" --admin_password="secret" --admin_email="admin@example.com" \
        --skip-email --no-color

    wp option update permalink_structure '/%postname%/'
    # wp option update link_manager_enabled '1'
fi