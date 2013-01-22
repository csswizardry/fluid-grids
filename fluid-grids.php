<?php
	// config part
	$grid = array(
		'cols' => array(
			'num' => 16,
			'width' => 40,
			'gutter' => 20
		),
		'css' => array(
			'wrap'	=> '.grid-wrapper',
			'grid'	=> '.grid',
			'col'	=> '.grid'
		)
	);
	
    // We work these next two out for you, you don’t need to touch them.
    $totalWidth  = $grid['cols']['num'] * ( $grid['cols']['width'] + $grid['cols']['gutter'] );    
    $fluidGutterWidth = round( ( $grid['cols']['gutter'] / $totalWidth ) * 100, 3 );

	function get_css( $args) {
		global $grid,$totalWidth, $fluidGutterWidth;
		$defaults = array(
			'columns' => $grid['cols']['num'],
			'column_width' => $grid['cols']['width'],
			'gutter_width' => $grid['cols']['gutter'],
			'echo' => false
		);
		$args = array_merge($defaults,$args);
		
		$css = '';
		
		$css .= $grid['css']['wrap'] . '{';
		$css .= 'max-width:' . $totalWidth . 'px;';
		$css .= 'margin-left:-' . $fluidGutterWidth . '%;';
		$css .= 'overflow:hidden;';
		$css .= '}'."\n";
		
		$css .= $grid['css']['grid'].'{';
		$css .= 'float:left;';
		$css .= 'margin-left:' . $fluidGutterWidth . '%;';
		$css .= '}'."\n";
		
		for($i=1;$i<=$args['columns'];$i++){
			$css .= $grid['css']['col'] . '-' . $i . '{';
			$css .= 'width:';
			$css .= round((((($i * $args['column_width']) + ($i * $args['gutter_width'])) - $args['gutter_width']) / $totalWidth) * 100, 3);
			$css .= '%';
			$css .= '}'."\n";
		}
		if(!$args['echo']){
			return $css;
		}
		echo '<pre>'.$css.'</pre>';
	}
?>

<?php
	get_css( array(
		'echo' => true
	) );
?>