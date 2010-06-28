#!/bin/sh
cd /Users/mneuhaus/Sites/typo3-tpl/

rm /Users/mneuhaus/Sites/typo3-tpl/typo3conf/db.sql
mysqldump --user=root --database typo3_tpl > /Users/mneuhaus/Sites/typo3-tpl/typo3conf/db.sql

zip -r ../typo3-package.zip . -x@ignore