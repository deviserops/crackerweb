<?php

echo 'Hi This is index view page';

echo '<br>';
echo 'This is css path ' . asset('js/test.js');
echo '<br>';
echo '<br>';
echo 'This is css path ' . assetRoot('js/test.js');

?>
<script src="<?= assetRoot('js/test.js') ?>"></script>
<script src="<?= asset('js/test.js') ?>"></script>
