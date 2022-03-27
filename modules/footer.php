<footer id="footer">

  <hr class="light">

  <small>

    <?php
      // switch Nano / Banano rep accounts & explorer
      $repAccount = NODEMON_REP_ACCOUNT;
      $donAccount = NODEMON_DON_ACCOUNT;
      $repExplorer = 'ninja';

      if ($currency == "banano")
      {
        $repAccount = NODEMON_BAN_REP_ACCOUNT;
        $donAccount = NODEMON_BAN_DON_ACCOUNT;
        $repExplorer = 'banano';
      }
    ?>

    <ul>
      <li>Based on NanoNodeMonitor 
         <?php
         global $versionCache;
         $versionCache = new FileCache(["ttl" => 10*60]); // cache for 10 minutes

         // set an API name so multiple monitors don't mix
         $apiName = "footer-$nanoNodeAccount";

         // get cached response
         $versionData = $versionCache->fetch($apiName, function () {
             $versionData = new stdClass();
             $versionData->latestVersion  = getLatestReleaseVersion();
             return $versionData;
         });
         echo getVersionInformation($versionData->latestVersion);
         ?> - Mod by <a href="https://github.com/pramonoutomo/" target="_blank" rel="noopener">PramonoUtomo</a>
      </li>
      <li>GitHub: Source <a href="<?php echo PROJECT_URL; ?>" target="_blank" rel="noopener">Nano Version</a> - <a href="https://github.com/pramonoutomo/pawNodeMonitor" target="_blank" rel="noopener">Paw Version</a></li>
      <li>
        Donate: <a href="<?php echo getAccountUrl($donAccount, $blockExplorer); ?>" target="_blank" rel="noopener"><?php echo truncateAddress($donAccount); ?></a>
      </li>
    </ul>
  </small>
</footer>

</div><!-- /container -->

<script src="static/js/axios.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/bootstrap-native-v4.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/handlebars.min-v4.7.6.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/main.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
  if (strlen($googleAnalyticsId))
  {
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $googleAnalyticsId; ?>');
</script>
<?php
  }
?>



</body>
</html>
