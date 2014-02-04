<?php
	function get_css( $args) {
		$defaults = array(
			'columns' => 16,
			'column_width' => 40,
			'gutter_width' => 20,
			'css' => array(
				'wrap'	=> '.grid-wrapper',
				'grid'	=> '.grid',
				'col'	=> '.grid'
			),
			'echo' => false
		);
		$args = array_merge( $defaults,$args );
		$totalWidth  = $args['columns'] * ( $args['column_width'] + $args['gutter_width'] );    
    	$fluidGutterWidth = round( ( $args['gutter_width'] / $totalWidth ) * 100, 3 );
		
		$css = '';
		$css .= $args['css']['wrap'] . '{';
		$css .= 'max-width:' . $totalWidth . 'px;';
		$css .= 'margin-left:-' . $fluidGutterWidth . '%;';
		$css .= 'overflow:hidden;';
		$css .= '}'."\n";
		
		$css .= $args['css']['grid'] . '{';
		$css .= 'float:left;';
		$css .= 'margin-left:' . $fluidGutterWidth . '%;';
		$css .= '}'."\n";
		
		for( $i=1;$i<=$args['columns'];$i++ ){
			$css .= $args['css']['col'] . '-' . $i . '{';
			$css .= 'width:';
			$css .= round(((( ($i * $args['column_width']) + ($i * $args['gutter_width']) ) - $args['gutter_width']) / $totalWidth) * 100, 3);
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
		'echo'	=> true,
		'css'	=> array(
			'wrap'	=> '.mywrap',
			'grid'	=> '.mygrid',
			'col'	=> '.mycol'
		)
	) );
?>