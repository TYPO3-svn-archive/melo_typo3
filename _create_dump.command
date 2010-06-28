#!/bin/sh
rm /Users/mneuhaus/Sites/typo3-tpl/typo3conf/db.sql
mysqldump --user=root --database typo3_tpl > /Users/mneuhaus/Sites/typo3-tpl/typo3conf/db.sql