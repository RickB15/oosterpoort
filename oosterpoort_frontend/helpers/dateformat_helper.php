<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( !function_exists('getCurrentDate') ) {
	function getCurrentDate($lang = 'en', $stamp = '', $offset = 'now') {
		if($offset != '') {
			$offset = strtotime($offset);
		}
		$datestring = array(
			'day' => '%A',
			'day_abb' => '%a',
			'day_num' => '%d',
			'day_num_-0' => '%e',
			'day_year' => '%j',
			'day_week' => '%w',
			'week' => '%U',
			'week_year' => '%W',
			'month' => '%B',
			'month_abb' => '%b',
			'month_num' => '%m',
			'year' => '%Y',
			'year_abb' => '%y',
			'year_century' => '%C',
			'time' => '%R',
			'time_full' => '%T',
			'time_full_meridies' => '%r',
			'time_hour_24' => '%H',
			'time_hour_24_-0' => '%k',
			'time_hour_12' => '%I',
			'time_hour_12_-0' => '%l',
			'time_minute' => '%M',
			'time_second' => '%S',
			'time_meridies' => '%P',
			'time_meridies_upper' => '%p',
			'time_local' => '%X',
			'date' => '%D',
			'date_local' => '%c',
			'year_full' => '%F',
			'year_full_local' => '%x',
			'date_full' => '%A %d %B %Y - %T',
			'date_full_-day' => '%d %B %Y - %T',
			'date_full_num' => '%d/%m/%Y - %T',
			'date_full_abb' => '%a %d %b %Y - %T',
			'date_full_abb_-day' => '%d %b %Y - %T'
		);
		if ( $lang === 'en' ) {
			setlocale(LC_ALL, 'en_EN');
		} else if ( $lang === 'fr' ) {
			setlocale(LC_ALL, 'fr_FR');
		} else if ( $lang === 'de' ) {
			setlocale(LC_ALL, 'de_DE');
		} else if ( $lang === 'es' ) {
			setlocale(LC_ALL, 'es_ES');
		} else if( $lang === 'nl' ) {
			setlocale(LC_ALL, 'nl_NL');
		} else {
			setlocale(LC_ALL, null);
		}

		if($stamp === 'day') {
			$date = strftime($datestring['day'],$offset);
			//Sunday trhough Saturday
		}
		if($stamp === 'day_abb') {
			$date = strftime($datestring['day_abb'],$offset);
			//Sun trhough Sat
		}
		if($stamp === 'day_num') {
			$date = strftime($datestring['day_num'],$offset);
			//01 to 31
		}
		if($stamp === 'day_num_-0') {
			$date = strftime($datestring['day_num_-0'],$offset);
			//1 to 31
		}
		if($stamp === 'day_year') {
			$date = strftime($datestring['day_year'],$offset);
			//001 to 366
		}
		if($stamp === 'day_week') {
			$date = strftime($datestring['day_week'],$offset);
			//0 (for Sunday) through 6 (for Satruday)
		}
		if($stamp === 'week') {
			$date = strftime($datestring['week'],$offset);
			//13* (for the 13th full week of the year) *01 to 53
		}
		if($stamp === 'week_year') {
			$date = strftime($datestring['week_year'],$offset);
			//46* (for the 46th week of the year beginning with a Monday) *01 to 53
		}
		if($stamp === 'month') {
			$date = strftime($datestring['month'],$offset);
			//January through Decmeber
		}
		if($stamp === 'month_abb') {
			$date = strftime($datestring['month_abb'],$offset);
			//Jan through Dec
		}
		if($stamp === 'month_num') {
			$date = strftime($datestring['month_num'],$offset);
			//01 (for January) trhough 12 (for December)
		}
		if($stamp === 'year') {
			$date = strftime($datestring['year'],$offset);
			//example 2018
		}
		if($stamp === 'year_abb') {
			$date = "'".strftime($datestring['year_abb'],$offset);
			//example '18
		}		
		if($stamp === 'year_century') {
			$date = strftime($datestring['year_century'],$offset);
			//19 for the 20th century
		}
		if($stamp === 'time') {
			$date = strftime($datestring['time'],$offset);
			//example 00:35 or 16:44
		}
		if($stamp === 'time_full') {
			$date = strftime($datestring['time_full'],$offset);
			//example 00:35:12 or 16:44:59
		}
		if($stamp === 'time_full_meridies') {
			$date = strftime($datestring['time_full_meridies'],$offset);
			//example 12:35:12 AM or 4:44:59 PM
		}
		if($stamp === 'time_hour_24') {
			$date = strftime($datestring['time_hour_24'],$offset);
			//00 through 23
		}
		if($stamp === 'time_hour_24_-0') {
			$date = strftime($datestring['time_hour_24_-0'],$offset);
			//0 through 23
		}
		if($stamp === 'time_hour_12') {
			$date = strftime($datestring['time_hour_12'],$offset);
			//00 through 12
		}
		if($stamp === 'time_hour_12_-0') {
			$date = strftime($datestring['time_hour_12_-0'],$offset);
			//0 through 12
		}
		if($stamp === 'time_minute') {
			$date = strftime($datestring['time_minute'],$offset);
			//00 trhough 59
		}
		if($stamp === 'time_second') {
			$date = strftime($datestring['time_second'],$offset);
			//00 trhough 59
		}
		if($stamp === 'time_meridies') {
			$date = strftime($datestring['time_meridies'],$offset);
			//am or pm
		}
		if($stamp === 'time_meridies_upper') {
			$date = strftime($datestring['time_meridies_upper'],$offset);
			//AM or PM
		}
		if($stamp === 'time_local') {
			$date = strftime($datestring['time_local'],$offset);
			//example 03:59:16 or 15:59:16 (based on local time from device)
		}
		if($stamp === 'date') {
			$date = strftime($datestring['date'],$offset);
			//example 02/05/09 -> February 5, 2009
		}
		if($stamp === 'date_local') {
			$date = strftime($datestring['date_local'],$offset);
			//Example: Tue Feb 5 00:45:10 2009 for February 5, 2009 at 12:45:10 AM (based on local time from device)
		}
		if($stamp === 'year_full') {
			$date = strftime($datestring['year_full'],$offset);
			//Example: 2009-02-05 for February 5, 2009
		}
		if($stamp === 'year_full_local') {
			$date = strftime($datestring['year_full_local'],$offset);
			//Example: 02/05/09 for February 5, 2009 (based on local time from device)
		}
		if($stamp === 'date_full') {
			$date = strftime($datestring['date_full'],$offset);
			//example Sunday 03 January 2018 - 12:45:56
		}
		if($stamp === 'date_full_-day') {
			$date = strftime($datestring['date_full_-day'],$offset);
			//example 03 January 2018 - 12:45:56
		}
		if($stamp === 'date_full_num') {
			$date = strftime($datestring['date_full_num'],$offset);
			//example 03/05/2018 - 12:45:56
		}
		if($stamp === 'date_full_abb') {
			$date = strftime($datestring['date_full_abb'],$offset);
			//example Sun 03 Jan 2018 - 12:45:56
		}
		if($stamp === 'date_full_abb_-day') {
			$date = strftime($datestring['date_full_abb_-day'],$offset);
			//example 03 Jan 2018 - 12:45:56
		}
		if( isset($date) ) {
			return $date;
		} else {
			return '';
		}
	}
}