# PAW Node Monitor

PAW Node Monitor is a server-side PHP-based monitor for PAW nodes. It connects to a running node via RPC and displays it's status on a simple webpage. Being server-side, it does not expose the RPC interface of the Nano node to the public.

## Manual Installation

### Prerequisites

- Running PAW Node with RPC enabled ([Tutorial](https://docs.nano.org/running-a-node/node-setup/))
- Webserver with PHP 8.0
- PHP-Curl Module

    `sudo apt-get install php-curl`

### Installation

In your empty webserver directory, e.g. `/var/www/html`, execute:

    git clone https://github.com/pramonoutomo/pawNodeMonitor .

If you want it to run a subdirectory remove the `.` at the end.

In the `modules` folder, create your own config file by executing:

    cp config.sample.php config.php

## Usage

You will have to add your node's account to the config file `config.php` by modifying the following lines. Edit all items you need:

```
// account of this node
$nanoNodeAccount = 'paw_1youraccountname24cq9799nerek153w43yjc9atoaeg3e91cc9zfr89ehj';
```

Official documentation for creating an account on the node via RPC can be found at the following URL:

https://docs.nano.org/running-a-node/voting-as-a-representative/#step-2-setup-representative-account

If you are running a standalone node you might need to modify the IP-address and the port for the RPC in the file `config.php`. It should match the corresponding entries in `~/Nano/config.json`, e.g.

```
// ip address for RPC (default: [::1])
$nanoNodeRPCIP   = '127.0.0.1';

// ip address for RPC (default: 7076)
$nanoNodeRPCPort = '7076';
```


## Support

Donations (NANO/XNO) to the development of Nano Node Monitor source are very welcome to:

    nano_1ninja7rh37ehfp9utkor5ixmxyg8kme8fnzc4zty145ibch8kf5jwpnzr3r

Or [sponsor the development on GitHub](https://github.com/sponsors/BitDesert)! Thanks!

Donation to the PAW Nodes Monitor mod are welcome too :)

    NANO: nano_1pawsayyn3prwdii958qjich6woidwqzk4j3ta953qrj1gbcq4ujctbs8ini
    BANANO: ban_1pawsayyn3prwdii958qjich6woidwqzk4j3ta953qrj1gbcq4ujctbs8ini
    PAW: paw_1pawsayyn3prwdii958qjich6woidwqzk4j3ta953qrj1gbcq4ujctbs8ini

