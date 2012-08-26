<?php 
class PresskitModel extends Model 
{
	protected $_validate=array(
		array('title','require','标题必填',0,'','all'),
		array('filename','require','内容必填',0,'','all'),
	);
	
	public function getPk() {
		return 'id';
	}
}
?>