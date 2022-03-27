<?php

// FIRST USE
// Please copy this file as config.php

// To edit a config uncomment the line, otherwise
// defaults will be used for each variable.

// ----------- General Variables -----------

// To switch between monitoring Nano / Banano nodes,
// set $currency, $themeChoice, and $blockExplorer to
// corresponding Nano / Banano values.

// Currency 'Paw'
$currency = 'Paw';

// Theme of your Node Monitor
// Available Themes:   'dark' or 'light'
$themeChoice = 'dark';

// Choice of block explorer
// Available Explorers:      'pawtracker'
$blockExplorer = 'pawtracker';

// Choice of widget
// Options: 'pawnimal'
$widgetType = 'pawnimal';

// Autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname), somekind like: Hetzner / Digital Ocean / Vultr (https://Lihat.info/vultr  get your free credits to try.)
$nanoNodeName = '';

// Location of your node. example: Jakarta, ID
$nodeLocation = '';

// A welcome message shown on top
$welcomeMsg = 'Welcome to My PawNode Monitor';

// ----------- Cache Engine ----------- //better don't change this cache settings.

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
$cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "redis" (Redis cache; requires extension; fast)
//      - Options:
//        - 'host' => optional; address of the Redis host (defaults to localhost)
//        - 'port' => optional; port for the Redis host (defaults to 6379)
//        - 'redis' => optional; an instantiated Redis instance (replaces use of host/port)
//        - 'ttl' => optional; cache time in seconds

$cache = [
"engine" => "files",
"options" => ["ttl" => $cacheTimeToLive]
];

// ----------- Node Variables -----------

// IP address for RPC (default: [::1]) , use only the IP! example: 111.111.111.111
$nanoNodeRPCIP   = '[::1]';

// Port for RPC (default: 7076)
// Paw nodes typically use port 7076.
$nanoNodeRPCPort = '7076';

// Account of this node
$nanoNodeAccount = '';

// Donation account for maintaining this node
$nanoDonationAccount = '';

// Number of decimal places to display Nano balances, i.e.
$nanoNumDecimalPlaces = 2;

// ----------- Analytics -----------

// Google Analytics Tracking ID, leave blank to disable Google Analytics.
$googleAnalyticsId = '';

// ----------- Social -----------

// Add your social accounts
// Check Out on How to Add new social here: https://github.com/NanoTools/nanoNodeMonitor/wiki/Social-Accounts
$socials['twitter'] = 'https://www.twitter.com/yourusername';
$socials['telegram'] = 'https://www.t.me/yourusername';
$socials['youtube'] = 'https://www.youtube.com/c/yourusername';

// Uptimerobot.com API key for external monitoring
$uptimerobotApiKey = '';

// Google Analytics Tracking ID.
$googleAnalyticsId = '';