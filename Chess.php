<?php
class Chess
{
	public function white()
	{
		return '<font size="20px" color="white">W</font>';
		//return '<div style="float:left;width:10px;height:10px;"></div>';
		//return '<b style="font-size:40px;">&#9632</b>';
	}
	public function black()
	{
		return '<font style="background-color:black;" size="20px">W</font>';
		//return '<div style="background-color:black;float:left;width:10px;height:10px;""></div>';
		//return '<b style="font-size:40px;">&#9633</b>';
	}
}
?>