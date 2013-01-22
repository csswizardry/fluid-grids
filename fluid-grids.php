<?php

    // How many columns would you like in your grid system?
    define('TOTAL_COLS', 16);

    // How wide is one column?
    define('COL_WIDTH', 40);

    // How wide is one gutter?
    define('GUTTER_WIDTH', 20);

    // We work these next two out for you, you don’t need to touch them.
    $totalWidth  = TOTAL_COLS * (COL_WIDTH + GUTTER_WIDTH);    
    $fluidGutterWidth = round((GUTTER_WIDTH / $totalWidth) * 100, 3);
    
    /**
     * The number of columns into the loop, plus the corresponding number
     * of gutters, minus one gutter (which is taken up as `margin-left`)
     * converted to a percentage (to three decimal places).
     */
    function calculateWidth($column)
    {    
        return round((((($i * COL_WIDTH) + ($i * GUTTER_WIDTH)) - GUTTER_WIDTH) / $totalWidth) * 100, 3);
    }

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
<?php for($i = 1; $i <= $totalCols; $i++) : ?>   
.grid-<?php echo $i ?>{
    width:<?php echo calculateWidth($i) ?>%;
}
<?php endfor ?>
</pre>
