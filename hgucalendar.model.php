<?php
/**
 * @class  hgucalendarModel
 * @author CRA (developers@developers.com)
 * @brief Model class of the hgucalendar module
 **/

class hgucalendarModel extends hgucalendar {
	/** 
	* @brief 초기화
	**/
	function init(){
	}

	//목록 가져오기
	function getHgucalendarEvent($args){
		$output = executeQueryArray('hgucalendar.getEvents', $args);
		return $output;
	}

}
?>
