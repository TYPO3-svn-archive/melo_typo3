#----------------------------------------------------------
#	Include Base
#----------------------------------------------------------
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/melo_base/res/configurations/constants/constants.ts">

#----------------------------------------------------------
#	Project specific constants
#----------------------------------------------------------
config.title = TYPO3 Website
config.baseUrl = http://localhost/melo_typo3/
config.logoFilename = logo.png
config.projectFolder = __project-alias__

pages.home = 1
pages.servicefolder = 10
pages.footerfolder = 6
pages.devpage = 13
pages.newsDetail = 24
pages.newsFolder = 3

config.devmode = 1


#------------------------------------------------------------
# 	Include Sub Configurations
#------------------------------------------------------------
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/melo_base/res/configurations/constants/constants/cal.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/melo_base/res/configurations/constants/constants/indexed_search.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/melo_base/res/configurations/constants/constants/tt_news.ts">
