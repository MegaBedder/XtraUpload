<?php $rand = rand();?>
var chart<?=$rand?> = new FusionCharts("<?=$base_url?>flash/charts/Pie3D.swf", "ChartId", "<?=$height?>", "<?=$width?>", "0", "0");chart<?=$rand?>.setDataXML("<chart caption='All Uploads >> Files vs Images' showPercentageValues='0'><set label='Regular' value='<?=$this->db->get_where('refrence', array('is_image' => false))->num_rows()?>' /><set label='Image' value='<?=$this->db->get_where('refrence', array('is_image' => true))->num_rows()?>' /></chart>");chart<?=$rand?>.render("chart_data");