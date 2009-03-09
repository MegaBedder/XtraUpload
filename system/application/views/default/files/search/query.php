<h2 style="vertical-align:middle"><img src="<?=base_url().'img/icons/search_32.png'?>" class="nb" alt="" /> Search: <?=$this->uri->segment(3)?></h2>
<div id="massActions" style="clear:both; padding-top:4px;">
	<div class="float-right">
		<?=generateLinkButton('New Search', site_url('files/search'), base_url().'img/icons/new_16.png', NULL)?>
	</div>
</div>
<p style=" clear:both;"></p>
<span style="display:none" class="info" id="edit_alert"><?php echo $this->lang->line('files_manage_10') ?></span>
<?=$flashMessage?>

<h3>Your query '<?=$query?>' returned <?=$num_results?> result(s)</h3>

<table border="0" style="width:95%" id="file_list_table">
	<tr>
		<th><?php echo $this->lang->line('files_manage_table_1') ?></th>
		<th><?php echo $this->lang->line('files_manage_table_2') ?></th>
		<th style="width:80px"><?php echo $this->lang->line('files_manage_table_3') ?></th>
	</tr>
	<?php 
	$i=0;
	foreach($files->result() as $file)
	{
		$id = $file->id;
		$link = $this->files_db->getLinks($file->secid);
	?>
	<tr id="<?=$file->file_id?>" <?=alternator('class="odd"', 'class="even"')?>>
		<td>
			<a href='<?=site_url('/files/get/'.$file->file_id.'/'.$file->link_name)?>' target="_blank">
				<img src="<?php echo base_url().'img/files/'.$this->functions->getFileTypeIcon($file->type);?>" class="nb" alt="" />
				<?=$file->o_filename?>
			</a>
		</td>
		<td>
			<?=$this->functions->getFilesizePrefix($file->size)?>
		</td>
		<td>
			<a href='javascript:;' onclick='$("#<?=$file->file_id?>-details").toggle()'><img src="<?=$base_url.'/img/icons/about_16.png'?>"  title="<?php echo $this->lang->line('files_manage_table_4') ?>" class="nb" /></a>
		</td>
	</tr>
	<tr class="details" style="display:none; border-top:none;" id="<?=$file->file_id?>-details">
		<td colspan="4" id="<?=$file->file_id?>-details-inner">
		<p>
			<img title="<?php echo $this->lang->line('files_manage_table_7') ?>"  class="nb" alt="<?php echo $this->lang->line('files_manage_table_7') ?>:" src="<?=$base_url?>img/icons/link_16.png" /> <input class="down_link" readonly="readonly" type="text" size="65" value="<?=$link['down']?>" onfocus="this.select()" onclick="this.select()" ondblclick="this.select()" /><br />
			
			<img title="Date Uploaded" alt="Date Uploaded:" class="nb" src="<?=$base_url?>img/icons/calendar_16.png" /> <em><?=unix_to_human($file->time)?></em>

			<?
			if(isset($link['img']))
			{
				?><br /><img title="<?php echo $this->lang->line('files_manage_table_9')?>" alt="<?php echo $this->lang->line('files_manage_table_9') ?>:" class="nb" src="<?=$base_url?>img/icons/pictures_16.png" /> <a href="<?=$link['img']?>"><?=$link['img']?></a><?
			}
			?>
			</p>
		</td>
	</tr>
	
	<?php 
		$i++;
	}
	?>
</table>
<?=$pagination?>