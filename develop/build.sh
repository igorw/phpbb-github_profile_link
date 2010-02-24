#!/bin/bash
VERSION="dev"
if [ $# -gt 0 ];
then
	VERSION=$1
fi
git archive --format=zip --prefix=github_profile_link/ HEAD install.xml license.txt modx.prosilver.en.xsl root > github_profile_link-$VERSION.zip
