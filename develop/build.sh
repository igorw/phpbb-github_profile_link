#!/bin/bash
# build a mod package
#
# develop/build.sh [VERSION]
#
# depends on: git-archive, svn-export, zip
#
# must specify files and folders manually because git-archive fails to respect
# gitattributes
#
# make sure you are on the master branch when building

# set version to $1, default to "dev"
VERSION="dev"
if [ $# -gt 0 ];
then
	VERSION=$1
fi

ZIP_NAME="github_profile_link-$VERSION.zip"
PREFIX="github_profile_link"

git archive --format=zip --prefix=$PREFIX/ -o $ZIP_NAME HEAD install.xml license.txt modx.prosilver.en.xsl root

# fetch umil
UMIL_DIR="$PREFIX/root/umil"
if [ ! -d $UMIL_DIR ];
then
	svn export --quiet http://code.phpbb.com/svn/umil/tags/release_$(cat develop/UMIL_VERSION | sed 's/\./_/g')/root/umil $UMIL_DIR
	for file in $(ls "$UMIL_DIR/language")
	do
		if [ "$(basename $file)" != "en" ];
		then
			rm -rf "$UMIL_DIR/language/$file"
		fi
	done
	zip --quiet -gr $ZIP_NAME $PREFIX
fi
