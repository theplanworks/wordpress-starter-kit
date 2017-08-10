#!/bin/bash

source ".env"

rsync -avz public/content/plugins/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/public/content/plugins/

rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/public/content/plugins/ public/content/plugins/

rsync -avz public/content/uploads/ forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/public/content/uploads/

rsync -avzh forge@$SYNC_HOST:$SYNC_REMOTE_FOLDER/public/content/uploads/ public/content/uploads/