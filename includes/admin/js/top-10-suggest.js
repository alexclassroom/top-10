jQuery(document).ready(function($) {
	// Function to add auto suggest.
	$.fn.tptnTagsSuggest = function( options ) {
		var cache;
		var last;
		var $element = $( this );

		options = options || {};

		var taxonomy = options.taxonomy || $element.attr( 'data-wp-taxonomy' ) || 'category';
		delete( options.taxonomy );

		function split( val ) {
			return val.split( /,\s*/ );
		}

		function extractLast( term ) {
			return split( term ).pop();
		}

		$element.on( "keydown", function( event ) {
				// Don't navigate away from the field on tab when selecting an item.
				if ( event.keyCode === $.ui.keyCode.TAB &&
				$( this ).autocomplete( 'instance' ).menu.active ) {
					event.preventDefault();
				}
			})
			.autocomplete({
				minLength: 2,
				source: function( request, response ) {
					var term;

					if ( last === request.term ) {
						response( cache );
						return;
					}

					term = extractLast( request.term );

					if ( last === request.term ) {
						response( cache );
						return;
					}

					$.ajax({
						type: 'POST',
						dataType: 'json',
						url: ajaxurl,
						data: {
							action: 'tptn_tag_search',
							tax: taxonomy,
							q: term
						},
					}).done( function( data ) {
						cache = data;
						response( data );
					});

					last = request.term;

				},
				search: function() {
					// Custom minLength.
					var term = extractLast( this.value );

					if ( term.length < 2 ) {
						return false;
					}
				},
				focus: function( event, ui ) {
					// Prevent value inserted on focus.
					event.preventDefault();
				},
				select: function( event, ui ) {
					var terms = split( this.value );
					var val   = ui.item.value;

					if ( val.indexOf(',') !== -1 ) {
						val = '"' + val + '"'
					}

					// Remove the last user input.
					terms.pop();

					// Add the selected item.
					terms.push( val );

					// Add placeholder to get the comma-and-space at the end.
					terms.push( "" );
					this.value = terms.join( ", " );
					return false;
				}
			});
	};

	$( '.category_autocomplete' ).each( function ( i, element ) {
		$( element ).tptnTagsSuggest();
	});

	$('.widget-liquid-right, #customize-controls').on( 'click', '.category_autocomplete', function() {
		$( '.category_autocomplete' ).tptnTagsSuggest();
	});
});