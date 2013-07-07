<h2 style="vertical-align:middle"><img src="<?=$base_url.'img/icons/user_32.png'?>" class="nb" alt="" /> <?=$this->lang->line('user_compare_header')?></h2><p>	<?=$this->lang->line('user_compare_1')?><table border="0" style="width:98%">    <tr>        <th><?= $this->lang->line('user_compare_12') ?></th>        <?php foreach($groupsTable['Header'] as $groupName): ?>            <th><?= $groupName ?></th>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_10') ?></td>        <?php foreach($groupsTable['Price'] as $price): ?>            <td><?= $price->getAmount() > 0 ? sprintf("%s %s", $price->getAmount(), $price->getCurrency()) : 'Free' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_9') ?></td>        <?php foreach($groupsTable['BillingInterval'] as $interval): ?>            <td><?= $interval ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_2') ?></td>        <?php foreach($groupsTable['SpeedLimit'] as $speedLimit): ?>            <td><?= $speedLimit->getAmount() ?> <?= $speedLimit->getUnit() ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_3') ?></td>        <?php foreach($groupsTable['UploadSizeLimit'] as $size): ?>            <td><?= $size->getAmount() ?> <?= $size->getUnit() ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_4') ?></td>        <?php foreach($groupsTable['WaitTimeLimit'] as $waitTime): ?>            <td><?= $waitTime->format('%s') ?> Second(s)</td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_5') ?></td>        <?php foreach($groupsTable['HasCaptchaOnDownload'] as $hasCaptcha): ?>            <td><?= $hasCaptcha ? 'Yes' : 'No' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_6') ?></td>        <?php foreach($groupsTable['HasAutoDownload'] as $hasDirectLinks): ?>            <td><?= $hasDirectLinks ? 'Yes' : 'No' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_7') ?></td>        <?php foreach($groupsTable['MaxFilesInSessionUploadedLimit'] as $maxFileCount): ?>        <td><?= $maxFileCount ?></td>		<?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_8') ?></td>        <?php foreach($groupsTable['FileStorageLimit'] as $storageLimit): ?>            <td><?= $storageLimit->getAmount() > 0 ? sprintf("%s %s", $storageLimit->getAmount(), $storageLimit->getUnit()) : 'Unlimited' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td>Can Search Files</td>        <?php foreach($groupsTable['HasSearchCapability'] as $hasSearch): ?>            <td><?= $hasSearch ? 'Yes' : 'No' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td>Can Upload Local Files</td>        <?php foreach($groupsTable['HasFlashUploadCapability'] as $hasFlash): ?>            <td><?= $hasFlash ? 'Yes' : 'No' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td>Can URL Upload</td>        <?php foreach($groupsTable['HasUrlUploadCapability'] as $hasUrl): ?>            <td><?= $hasUrl ? 'Yes' : 'No' ?></td>        <?php endforeach; ?>    </tr>    <tr>        <td><?= $this->lang->line('user_compare_11') ?></td>        <?php foreach($groupsTable['FileExpirationLimit'] as $dayLimit): ?>            <td><?= $dayLimit->format('%d') ?> Day(s)</td>        <?php endforeach; ?>    </tr></table></p>