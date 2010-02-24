#!/bin/bash
# build a mod package using git-archive
#
# develop/build.sh [VERSION]
#
# must specify files and folders manually because git-archive fails to respect
# gitattributes

VERSION="dev"
if [ $# -gt 0 ];
then
	VERSION=$1
fi

git archive --format=zip --prefix=github_profile_link/ HEAD install.xml license.txt modx.prosilver.en.xsl root > github_profile_link-$VERSION.zip
