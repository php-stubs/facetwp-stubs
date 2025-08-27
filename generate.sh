#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for FacetWP\n * @see https://facetwp.com/\n * @see https://github.com/php-stubs/facetwp-pro-stubs\n */'

FILE="facetwp-stubs.php"

set -e

test -f "$FILE"
test -d "source/facetwp"

# Download dependencies
if [ ! -d vendor ]; then
    composer update
fi

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

