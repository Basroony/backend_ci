<?php

/** HUE to RGB format **/
if(!function_exists('hue_to_rgb')){
	function hue_to_rgb($p, $q, $t){
		if($t < 0) $t += 1;
		if($t > 1) $t -= 1;
		if($t < 1/6) return $p + ($q - $p) * 6 * $t;
		if($t < 1/2) return $q;
		if($t < 2/3) return $p + ($q - $p) * (2/3 - $t) * 6;
		return $p;
	}
}

/** HSL to RGB format **/
if(!function_exists('hsl_to_rgb')){
	function hsl_to_rgb($h, $s, $l){
		if($s == 0){
			$r = $g = $b = $l;
		}else{
			$q = $l < 0.5 ? $l * (1 + $s) : $l + $s - $l * $s;
			$p = 2 * $l - $q;
			$r = hue_to_rgb($p, $q, $h + 1/3);
			$g = hue_to_rgb($p, $q, $h);
			$b = hue_to_rgb($p, $q, $h - 1/3);
		}

		return array(round($r * 255), round($g * 255), round($b * 255));
	}
}