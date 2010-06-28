page.100.wrap = <div id="container">|</div>
page.100{
	# Header
	200 = COA
	200 {
		wrap = <div id="header">|</div>
		100 = COA
		100.wrap = <div id="service">|</div>
		100{
			100 < lib.service
			200 < tmp.nav.lang
			300 < tmp.searchbox
		}
		200 = TEXT
		200.value = {$config.title}
		200.wrap = <div id="logo">|</div>
		200.typolink.parameter.stdWrap.data = fullRootLine:10,tx_melobase_home,slide
		300 < tmp.nav.simple.1
		300.wrap = <div id="nav-main">|</div>
		400 < tmp.clear
	}

	# Teaser
	300 = COA
	300 {
		stdWrap{
			wrap = <div id="teaser" class="">|</div>
			required = 1
		}
		20 = COA
		20{
			stdWrap.required = 1
			stdWrap.wrap = <div class="contain">|</div>
			100 < field.teaser
		}
	}

	# Content
	400 = COA
	400 {
		wrap = <div id="content"><div class="equal">|</div></div>
		# Left Sidebar
		300 = COA
		300 {
			stdWrap{
				wrap = <div id="left" class="dl15">|</div>
				required = 1
			}
			100 = COA
			100 {
				stdWrap{
					wrap = <div class="content">|</div>
					required = 1
				}
				100 < tmp.nav.multi.2
				300 < field.static.left
				400 < field.left
			}
		}
		# Right Sidebar
		400 = COA
		400 {
			stdWrap{
				wrap = <div id="right" class="dr15">|</div>
				required = 1
			}
			100 = COA
			100 {
				stdWrap{
					wrap = <div class="content contain">|</div>
					required = 1
				}
				200 < field.right
				300 < field.static.right
			}
		}
		# Center Content
		500 = COA
		500 {
			stdWrap{
				wrap = <div id="center" class="fluid contain">|</div>
				required = 1
			}
			#Breadcrumb
			100 = COA
			100.100 < tmp.nav.breadcrumb
#			100.300 < tmp.nav.lang
			100.wrap = <div id="breadcrumb">|</div>
			300 < field.center
			400 < tmp.clear
		}
	}
	# Footer
	599 < tmp.clear
	600 < tmp.nav.folder
	600 {
		special.value.stdWrap.data = fullRootLine:10,tx_melobase_footerfolder,slide
		1.wrap = <div id="footer" class="fluid"><ul class="hnav">|<li>(c)&nbsp;{$config.title}</li></ul></div>
	}
}