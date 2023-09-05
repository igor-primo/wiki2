<?php
# This file was automatically generated by the MediaWiki 1.20.5
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

# $wgDebugLogFile = "/tmp/wiki.log";

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "TRT20";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "";
$wgArticlePath      = "/wiki/$1";
$wgUsePathInfo      = true;
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
#$wgServer           = "https://wiki.trt20.intra";
$wgServer           = WebRequest::detectServer();

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
# $wgLogo             = "$wgStylePath/common/images/wiki.png";
$wgLogo             = "/images/c/c1/Trt20.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@10.20.0.94";
$wgPasswordSender   = "apache@10.20.0.94";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "10.20.0.163";
$wgDBname           = "mediawiki_homolog";
$wgDBuser           = "root";
$wgDBpassword       = "12mudar34";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUploadSizeWarning = 256 * 1024 * 1024;
$wgMaxUploadSize = 256 * 1024 * 1024;
$wgStrictFileExtensions = false;
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";
# $wgTmpDirectory = "$wgResourceBasePath/tmp";
# $wgThumbnailScriptPath = "{$wgScriptPath}/thumb.php";
# $wgGenerateThumbnailOnParse = false;

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "pt-br";

$wgSecretKey = "2980d0326f31764d84a5a254115c4e89037e9be75ee3ff8da7f48cfac89d383c";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "56be5b0268366e7c";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['*']['autocreateaccount'] = true;

$wgGroupPermissions['user']['*'] = true;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
# require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
# require_once( "$IP/extensions/Gadgets/Gadgets.php" );
# require_once( "$IP/extensions/LdapAuthentication/LdapAuthentication.php" );
# require_once( "$IP/extensions/Nuke/Nuke.php" );
# require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
# require_once( "$IP/extensions/Renameuser/Renameuser.php" );
# require_once( "$IP/extensions/Vector/Vector.php" );
# require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
# require_once( "$IP/extensions/IntraACL/includes/HACL_Initialize.php" );

wfLoadSkin('Vector');
wfLoadSkin('MonoBook');
wfLoadSkin('Timeless');
wfLoadSkin('MinervaNeue');
# wfLoadSkin('Chameleon');
wfLoadSkin('Foreground');

wfLoadExtension('Cite');
wfLoadExtension('Gadgets');
wfLoadExtension('ImageMap');
wfLoadExtension('InputBox');
wfLoadExtension('Nuke');
wfLoadExtension('ParserFunctions');
wfLoadExtension('Poem');
wfLoadExtension('SyntaxHighlight_GeSHi');
wfLoadExtension('WikiEditor');

wfLoadExtension('MobileFrontend');
wfLoadExtension('PluggableAuth');
wfLoadExtension('LDAPProvider');
wfLoadExtension('LDAPAuthentication2');
#  wfLoadExtension('Bootstrap');

$LDAPProviderDomainConfigProvider = function() {
	$config = [
		'Active Directory' => [
			'connection' => [
				"server" => "adserver01.trt20.intra",
				"user" => "CN=Sistema Wiki,OU=Sistemas,DC=trt20,DC=intra",
				"pass" => 'b7790qKu',
				"options" => [
					"LDAP_OPT_DEREF" => 1
				],
				"basedn" => "dc=trt20,dc=intra",
				"groupbasedn" => "dc=trt20,dc=intra",
				"grouprequest" => "MediaWiki\\Extension\\LDAPProvider\\UserGroupsRequest\\UserMemberOf::factory",
				"userbasedn" => "dc=trt20,dc=intra",
				"searchattribute" => "samaccountName",
				"searchstring" => "", # "sAMAccountName=USER-NAME",
				"usernameattribute" => "samaccountname",
				"realnameattribute" => "cn",
				"emailattribute" => "mail"
			]
		]
	];
	return new \MediaWiki\Extension\LDAPProvider\DomainConfigProvider\InlinePHPArray($config);
};

$wgDebugLogGroups['PluggableAuth'] = 
$wgDebugLogGroups['LDAP'] = 
$wgDebugLogGroups['MediaWiki\\Extension\\LDAPProvider\\Client'] = 
$wgDebugLogGroups['LDAPGroups'] = 
$wgDebugLogGroups['LDAPUserInfo'] = 
$wgDebugLogGroups['LDAPAuthentication2'] = 
$wgDebugLogGroups['LDAPAuthorization'] = '/tmp/LDAP.log';
$wgShowExceptionDetails = true;

$LDAPAuthentication2UsernameNormalizer = 'strtolower';
$LDAPAuthentication2AllowLocalLogin = true;





# IntraACL

# Set this variable to false to disable the patch that checks all titles
# for accessibility. Unfortunately, the Title-object does not check if an article
# can be accessed. A patch adds this functionality and checks every title that is
# created. If a title can not be accessed, a replacement title called "Permission
# denied" is returned. This is the best and securest way of protecting an article,
# however, it slows down things a bit.

$haclgEnableTitleCheck = false;
 
# This variable controls the behaviour of unreadable articles included into other
# articles. When it is a non-empty string, it is treated as the name of a message
# set to boolean FALSE, inclusion directive is shown instead of article content.
$haclgInclusionDeniedMessage = 'haloacl-inclusion-denied';
 
# This flag applies to articles that have or inherit no security descriptor.
#
# true
#    If this value is <true>, all articles that have no security descriptor are
#    fully accessible for IntraACL. Other extensions or $wgGroupPermissions can
#    still prohibit access.
#    Remember that security descriptor are also inherited via categories or
#    namespaces.
# false
#    If it is <false>, no access is granted at all. Only the latest author of an
#    article can create a security descriptor.
$haclgOpenWikiAccess = true;
 
# Values of this array are treated as language-dependent names of namespaces which
# can not be protected by IntraACL.
$haclgUnprotectableNamespaces = array();
 
# If this is true, "ACL" tab will be hidden for unprotected pages.
$haclgDisableACLTab = false;
 
# If $haclgEvaluatorLog is <true>, you can specify the URL-parameter "hacllog=true".
# In this case IntraACL echos the reason why actions are permitted or prohibited.
$haclgEvaluatorLog = true;
 
# If you already have custom namespaces on your site, insert
#    $haclgNamespaceIndex = ???;
# into your LocalSettings.php *before* including this file. The number ??? must
# be the smallest even namespace number that is not in use yet. However, it
# must not be smaller than 100.
$haclgNamespaceIndex = 102;
 
# This specifies how different right definitions which apply to one page combine.
# There may be page, category and namespace rights.
# Possible values:
# - HACL_COMBINE_EXTEND: user has the right if it is granted within ANY of the applicable definitions.
# - HACL_COMBINE_SHRINK: user has the right only if it is granted within ALL applicable definitions.
# - HACL_COMBINE_OVERRIDE: more specific rights override less specific ones.
#   I.e. page rights override category rights, which override namespace rights.
### $haclgCombineMode = HACL_COMBINE_EXTEND;
 
# Names of MediaWiki groups members of which are IntraACL super-users
# and can view and edit all articles, ACLs and etc. It is needed to
# have someone who can repair incorrect right definitions created by users
# (which is a very common scenario in the case of IntraACL because of a
# relatively complex right model).
$haclgSuperGroups = array('bureaucrat', 'sysop');
 
# Preload 1000 SDs individually granted for current user during right checks.
# If your database is very large and this number is exceeded, IntraACL will begin to
# make individual DB queries for the access check of each separate page.
$iaclPreloadLimit = 1000;

### enableIntraACL();

# LDAP Authentication
### $$wgAuth = new LdapAuthenticationPlugin();

# WikiEditor
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;

# End of automatically generated settings.
# Add more configuration options below.

$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'doc',
    'xls', 'mpp', 'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx',
    'pptx', 'ps', 'odt', 'ods', 'odp', 'odg'
);

$wgPluggableAuth_Config = [
    "LDAP" => [
        'plugin' => 'LDAPAuthentication2',
        'data' => [
            'domain' => 'Active Directory'
        ]
    ]
];