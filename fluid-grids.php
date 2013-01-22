<pre>
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

    echo <<<CSS
.grid-wrapper{
    max-width:{$totalWidth}px;
    margin-left:-{$fluidGutterWidth}%;
    overflow:hidden;
}
.grid{
    float:left;
    margin-left:{$fluidGutterWidth}%;
}

CSS;

    // Loop through all our possible column widths:
    for($i = 1; $i <= $totalCols; $i++){
        
        /**
         * The number of columns into the loop, plus the corresponding number
         * of gutters, minus one gutter (which is taken up as `margin-left`)
         * converted to a percentage (to three decimal places).
         */
        $cssWidth = round((((($i * $colWidth) + ($i * $gutterWidth)) - $gutterWidth) / $totalWidth) * 100, 3);

        echo <<<CSS
.grid-{$i}{width:{$cssWidth}%;}

CSS;
    
    }

?>
</pre>