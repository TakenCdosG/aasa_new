<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

if(isset($row->field_field_date[0]['raw']['value'])){
	
	$star = strtotime($row->field_field_date[0]['raw']['value']);
	if($star != FALSE){
		$end = strtotime($row->field_field_date[0]['raw']['value2']);

		$date_star = date('M d', $star);
		$year = date('Y', $star);
		$date_end = ", ";
		$hour = date(';g A', $date_star);


		if ($star != $end) {
		    if (date('M', $star) == date('M', $end)) {
		        $date_end = " - " . date('d', $end) . ", ";
		    } else {
		        $date_end = " - " . date('M d', $end) . ", ";
		    }

		}

		$date = $date_star . $date_end . $year . $hour;
		print $date;
		//print "<strong>Save the Date - </strong>" . $date;
	}
}
?>