<?php

    // How many columns would you like in your grid system?
    $totalCols   = 16;

    // How wide is one column?
    $colWidth    = 40;

    // How wide is one gutter?
    $gutterWidth = 20;

    // We work these next two out for you, you don’t need to touch them.
    $totalWidth  = $totalCols * ($colWidth + $gutterWidth);    
    $fluidGutterWidth = round(($gutterWidth / $totalWidth) * 100, 3);

?>

<pre>
.grid-wrapper{
    max-width:<?php echo $totalWidth . 'px;<br>'; ?>
    margin-left:-<?php echo $fluidGutterWidth . '%;<br>'; ?>
    overflow:hidden;
}
.grid{
    float:left;
    margin-left:<?php echo $fluidGutterWidth . '%;<br>'; ?>
}
<?php

    // Loop through all our possible column widths:
    for($i = 1; $i <= $totalCols; $i++){
        
        echo '.grid-' . $i . '{ ';
        
        /**
         * The number of columns into the loop, plus the corresponding number
         * of gutters, minus one gutter (which is taken up as `margin-left`)
         * converted to a percentage (to three decimal places).
         */
         
        $totalColWidth = $i * $colWidth;
        $totalGutterWidth = $i * $gutterWidth;
        $finalGutterWidth = ($totalColWidth + $totalGutterWidth) - $gutterWidth;
        
        $cssWidth = round(($finalGutterWidth / $totalWidth) * 100, 3);
        
        echo 'width:' . $cssWidth . '%;';
        
        
        echo ' }<br>';
        
    }
?>
</pre>
