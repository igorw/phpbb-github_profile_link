#!/bin/bash
# validate install.xml against the modx xsd schema
#
# depends on xmllint

xmllint --noout --schema develop/modx-schema.xsd install.xml
