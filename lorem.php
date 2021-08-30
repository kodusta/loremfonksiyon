<?php if(!function_exists('LoremIpsum')){
	function LoremIpsum($type='',$num=''){
		$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus lectus. Duis ultrices bibendum tristique. Etiam vel est porta turpis hendrerit placerat at non mauris. Maecenas augue odio, dapibus eget auctor sit amet, rutrum nec nisl. Praesent tincidunt adipiscing auctor. Sed sollicitudin lobortis arcu, sit amet malesuada mi auctor varius. Duis eleifend pretium felis quis lobortis. Nam posuere arcu quis magna vestibulum nec pellentesque enim imperdiet. Aenean nunc augue, sodales varius molestie faucibus, tincidunt a odio. Curabitur cursus ante metus. Fusce tristique ante id magna rhoncus lobortis a sit amet risus.';
		if($type == 'sentence'){
			return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
		}elseif($type == 'paragraphs'){
			$return = '';
			if($num == ''){
				$return .= "<p>$lorem</p>";
			}else{
				for($i=0;$i<$num;$i++){
					if($num == $i){
						$return .= $lorem;
					}else{
						$return .= $lorem.' <br />';
					}
				}
			}
			return $return;
		}else{
			// return just a sentence if the type was undifined
			return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
		}
	}
}
?>
