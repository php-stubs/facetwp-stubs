#!/bin/bash
#
# Download ACF PRO releases and generate stubs for each one.
#
# apt-get install wget xmlstarlet unzip git
#
# Start: ACF_PRO_KEY="Your ACF PRO license key here" ./release-latest-versions.sh

get_version()
{
    # rm -f -r source/facetwp

    # # Download page, convert to XML, parse release versions
    # wget "https://github.com/wordpress-premium/facetwp/archive/refs/heads/main.zip" -O  source/facetwp.zip
    # unzip source/facetwp.zip -d source
    # mv source/facetwp-main source/facetwp

    test -d "source/facetwp"

    rm -rf "source/facetwp/facetwp"
    rm -rf "source/facetwp/FacetWP Addons"
    echo $(php -f get_version.php);
}

while read -r VERSION; do

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
    # git tag "v${VERSION}"
done < <(get_version | tac)