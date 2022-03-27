<?php if ($nanoNodeAccount): ?>
<?php if ($widgetType == 'qr'): ?>

<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=nano:<?php echo $nanoNodeAccount; ?>&choe=UTF-8" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php elseif($widgetType == 'pawnimal'): ?>

<img src="https://pawnimal.paw.digital/api/v1/nano?address=<?php echo $nanoNodeAccount; ?>" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php endif; ?>
<?php endif; ?>
