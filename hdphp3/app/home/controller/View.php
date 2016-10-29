<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace app\home\controller;

class View {
	//动作
	public function tag() {
		if(IS_POST){
			Validate::make([
				['username','required','abc']
			]);
		}
		$data = Db::table( 'user' )->get();

		return view()->with( 'data', $data );
	}

	//用户定义标签
	public function user() {
		return view();
	}
}