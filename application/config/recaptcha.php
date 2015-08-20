<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Recaptcha configuration settings
 * 
 * recaptcha_sitekey: Recaptcha site key to use in the widget
 * recaptcha_secretkey: Recaptcha secret key which is used for communicating between your server to Google's
 * lang: Language code, if blank "en" will be used
 * 
 * recaptcha_sitekey and recaptcha_secretkey can be obtained from https://www.google.com/recaptcha/admin/
 * Language code can be obtained from https://developers.google.com/recaptcha/docs/language
 * 
 * @author Damar Riyadi <damar@tahutek.net>
 */

$config['recaptcha_sitekey']   = "6LdMMwcTAAAAAAkWxV1E3H7vspuYCRWpvPtPjQYh";
$config['recaptcha_secretkey'] = "6LdMMwcTAAAAAKRCH2egG9y4E7FQJcnAjg5qNFnd";
$config['lang']                = "en";