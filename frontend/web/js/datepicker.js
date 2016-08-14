var Datepicker = function () {

    return {
        
        //Datepickers
        initDatepicker: function () {
	        // Regular datepicker
	        $('.dateTime').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>'
	        });
	        $('.datepickerForMonth').datepicker({
	            dateFormat: 'mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>'
	        });	        
	        
	        // Date range
	        $('.startDate').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('.finishDate').datepicker('option', 'minDate', selectedDate);
	            }
	        });
	        $('.finishDate').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('.startDate').datepicker('option', 'maxDate', selectedDate);
	            }
	        });
	        
	        // Inline datepicker
	        $('#inline').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>'
	        });
	        
	        // Inline date range
	        $('#inline-start').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#inline-finish').datepicker('option', 'minDate', selectedDate);
	            }
	        });
	        $('#inline-finish').datepicker({
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#inline-start').datepicker('option', 'maxDate', selectedDate);
	            }
	        });
        }

    };
}();