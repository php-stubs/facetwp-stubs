#!/bin/bash
#
# Manually download FacetWP release and generate stubs for each one
#
# ./release-latest-versions.sh

rm -f -r source/facetwp
unzip -qq source/facetwp.zip -d source
test -d "source/facetwp"

VERSION=$(php -f get_version.php);

echo "Releasing ${VERSION} version ..."

if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
    echo "Tag exists!"
    continue
fi

# Generate stubs
echo "Generating stubs ..."
./generate.sh

# # Tag version
git commit facetwp-stubs.php -m "Generate stubs for FacetWP ${VERSION}"
git tag "v${VERSION}"
