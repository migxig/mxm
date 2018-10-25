<?php

namespace ctrl;

class index extends base{
	public function start()
	{
		var_dump(request::getParams());die;
		var_dump('控制器初始页');
	}
}