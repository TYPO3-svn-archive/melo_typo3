<?php
$TYPO3_CONF_VARS['SYS']['sitename'] = 'New TYPO3 site';

	// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports';

$typo_db_extTableDef_script = 'extTables.php';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$typo_db_username = 'root';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = 'localhost';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = '1188aa6696ff9e982a7081cc4de14fb71942d2fa5452f1fc34320b274c40d511cf81295449ca3d4287060326358873a2';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.3';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db = 'typo3_website';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 23-05-10 00:27:38
$TYPO3_CONF_VARS['GFX']['im_path'] = '/opt/local/bin/';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['GFX']['im_path_lzw'] = '/opt/local/bin/';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['UTF8filesystem'] = '1';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'im6';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,static_info_tables,templavoila,kickstarter,mn_swfcallback,realurl_yaml,realurl,realurlmanagement,kb_tv_cont_slide,t3quixplorer,typoscript_code,nh_tvdragndrop,tt_news,pagebrowse,comments,doc_indexed_search,indexed_search,rgnewsce,tinymce_rte,cal,cal_ts_service,wt_spamshield,api_macmade,media,fluid,tt_news_location,formhandler,recycler,scheduler,load_optimization,wt_doorman,wt_gallery,jq_fancybox,easycal,css_filelinks,greenhouse,fam_dump,dd_googlesitemap,pagenotfound_handler,melo_base,em_references,rlmp_language_detection,sp_betterflex';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,install,rtehtmlarea,t3skin,static_info_tables,templavoila,kickstarter,mn_swfcallback,realurl_yaml,realurl,realurlmanagement,kb_tv_cont_slide,t3quixplorer,typoscript_code,nh_tvdragndrop,tt_news,pagebrowse,comments,doc_indexed_search,indexed_search,rgnewsce,tinymce_rte,cal,cal_ts_service,wt_spamshield,api_macmade,media,fluid,tt_news_location,formhandler,load_optimization,wt_doorman,wt_gallery,jq_fancybox,easycal,css_filelinks,greenhouse,fam_dump,dd_googlesitemap,pagenotfound_handler,melo_base,em_references,rlmp_language_detection,sp_betterflex';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['jfmulticontent'] = 'a:2:{s:17:"useStoragePidOnly";s:1:"1";s:11:"ttNewsCodes";s:1:"0";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['wec_staffdirectory'] = 'a:3:{s:10:"useFEUsers";s:1:"1";s:7:"showMap";s:1:"0";s:19:"useStaffDeptRecords";s:1:"0";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 24-05-10 15:31:34
$TYPO3_CONF_VARS['EXT']['extConf']['wec_map'] = 'a:1:{s:7:"apiKey.";a:1:{s:6:"google";a:1:{s:9:"localhost";s:0:"";}}}';	// Modified or inserted by wec_map. 
// Updated by wec_map 24-05-10 15:38:10
// Updated by TYPO3 Extension Manager 11-06-10 09:43:17
?>