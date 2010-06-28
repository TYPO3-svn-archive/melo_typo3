#!/bin/sh
svn revert . -R
svn st |grep ^\?| awk '{print $2}'|xargs rm
mysql --user=root -e 'DROP DATABASE typo3_tpl'
mysql --user=root < /Users/mneuhaus/Sites/typo3-tpl/typo3conf/db.sql