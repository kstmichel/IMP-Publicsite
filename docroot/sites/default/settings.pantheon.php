<?php
// Extract the environment settings from pantheon
if(isset($_SERVER['PRESSFLOW_SETTINGS'])) {
  extract(json_decode($_SERVER['PRESSFLOW_SETTINGS'], TRUE));
}

### error handling
$conf['error_level'] = 0;

#### smtp support
$conf['smtp_deliver'] = 1; // send emails
$conf['maillog_log'] = 1; // log items in the maillog
$conf['smtp_queue'] = 1; // send emails using a queue (this batch sends during cron runs)
$conf['smtp_queue_fail'] = 1; // retry messages that fail to send
//This host can be used to request hosts that don't have DNS configured yet
// currently this only works for the feeds module
$conf['ncg_proxy_host'] = "https://edge.live.getpantheon.com/";

//$bakery_protocol = "https://";
//$conf['bakery_cookie_prefix'] = 'STYXKEY_';
//$conf['bakery_master_proxy'] = "edge.live.getpantheon.com";
////$conf['servername'] is important to allow the sso client to register itself with the bakery master
////TODO: pantheonsite.io is going to need to be changed to our organizational vanity domain
//$conf['servername'] = "{$site}.{$env}.im-portal.com";
////TODO: move this to the build file instead of keeping it here.
////BAKERY SSO SETTINGS
//$ssomaster_name = "ncg-enterprise";


if (isset($_SERVER['PANTHEON_ENVIRONMENT']) && php_sapi_name() != 'cli') {

// Redirect to HTTPS on every Pantheon environment.
  $primary_domain = $_SERVER['HTTP_HOST'];

  if ($_SERVER['HTTP_HOST'] != $primary_domain
    || !isset($_SERVER['HTTP_X_SSL'])
    || $_SERVER['HTTP_X_SSL'] != 'ON'
  ) {

    # Name transaction "redirect" in New Relic for improved reporting (optional)
    if (extension_loaded('newrelic')) {
      newrelic_name_transaction("redirect");
    }

    header('HTTP/1.0 301 Moved Permanently');
    header('Location: https://' . $primary_domain . $_SERVER['REQUEST_URI']);
    exit();
  }
}