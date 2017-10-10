#!/bin/bash

BASE="public/content"

source ".env"

if [ "$1" == "up" ]; then
    rsync -avz $BASE/plugins/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/plugins/
    rsync -avz $BASE/uploads/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/uploads/
    rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/plugins/ $BASE/plugins/
    rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/uploads/ $BASE/uploads/
else
    rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/plugins/ $BASE/plugins/
    rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/uploads/ $BASE/uploads/
    rsync -avz $BASE/plugins/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/plugins/
    rsync -avz $BASE/uploads/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/$BASE/uploads/
fi
