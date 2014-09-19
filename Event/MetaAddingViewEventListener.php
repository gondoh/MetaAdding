<?php
class MetaAddingViewEventListener extends BcViewEventListener {
/**
 * 登録イベント
 *
 */
	public $events = array(
		'beforeLayout',
	);
	
/**
 * beforeLayout
 *
 */
	public function beforeLayout(CakeEvent $event) {
		// 管理画面は除外
		$View = $event->subject();
		if (BcUtil::isAdminSystem()) {
			return;
		}
		
		$metaHtml = $View->element('MetaAdding.meta');
		// $scripts_for_layout に追加する
		$View->addScript($metaHtml);
	}
	
}
