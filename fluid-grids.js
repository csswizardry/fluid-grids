
/**
 * FluidGrids Generator
 * @copyright 2013 James Hall and Harry Roberts
 * @license MIT 
 */
var FluidGrids = function() {
	/**
	 * Private properties
	 */

    var getVal = function(selector) {
        return parseInt($(selector).val(), 10);
    };

    var calculate = function() {
        var totalWidth  = getVal('#total-cols') * (getVal('#total-cols') + getVal('#gutter-width'));    
        var fluidGutterWidth = Math.round((getVal('#gutter-width') / totalWidth) * 100, 3);

		var template = swig.compile($('#css-template').html());

		var cols = [];
		for (i = 0; i < getVal('#total-cols'); i++) {
			
			var totalColWidth = i * getVal('#col-width');
	        totalGutterWidth = i * getVal('#gutter-width');
	        finalGutterWidth = (totalColWidth + totalGutterWidth) - getVal('#gutter-width');
	        
	        cssWidth = Math.round((finalGutterWidth / totalWidth) * 100, 3);
			cols.push(cssWidth);
		}

        var output = template({
        	totalCols: getVal('#total-cols'),
        	colWidth: getVal('#col-width'),
        	gutterWidth: getVal('#gutter-width'),
        	totalWidth: totalWidth,
        	fluidGutterWidth: fluidGutterWidth,
        	cols: cols
        });
        $('textarea').val(output);
	};

	/**
	 * Public functions
	 */
	return {
		init: function() {
			// Attach event handlers
			console.log('hi there');
			$('#total-cols, #col-width, #gutter-width').change(function() {
				console.log('calc');
				calculate();
			});
		}
	};
}();


$(document).ready(function() {
	FluidGrids.init();
});

