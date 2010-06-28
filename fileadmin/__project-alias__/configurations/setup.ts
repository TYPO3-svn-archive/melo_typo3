#------------------------------------------------------------
#	Include Base
#------------------------------------------------------------
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/melo_base/res/configurations/setup.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/__project-alias__/configurations/setup/tmp/stub.ts">

#------------------------------------------------------------
#	Project specific constants
#------------------------------------------------------------

page = PAGE
page {
	includeJS{
		main = fileadmin/{$config.projectFolder}/js/main.js
	}
	
	includeCSS{
		skin = fileadmin/{$config.projectFolder}/css/skin.css
	}
	
	headerData{
		344 = HTML
		344.value = <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
		345 = HTML
		345.value = <link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
	}
}

#------------------------------------------------------------
#	Include Sub Configurations
#------------------------------------------------------------
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/__project-alias__/configurations/setup/lang.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/__project-alias__/configurations/setup/mapping.ts">

plugin.tx_media_pi1{
	types {
		cu3er {
			defaults {
				width = 960c
				height = 350c-0
			}
		}
		slideshow {
			name = Slideshow
			flexform = EXT:media/res/flexforms/slideshow.xml
			template = EXT:media/res/templates/slideshow.html
			userfunc = EXT:media/res/userfuncs/class.slideshow_processing.php:slideshow_processing
			image {
				width = 752c
				height = 300c
			}
		}
	}
}