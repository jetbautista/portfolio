/**
 * This script adds the jquery effects to the Jet Genesis Child Theme.
 *
 * 
 * @author Jet Klen Bautista
 * @license GPL-2.0+
 */

jQuery(function( $ ){

	// Add opacity class to site header.
	$( document ).on('scroll', function(){

		if ( $( document ).scrollTop() > 300 ){
			$( '.site-header' ).addClass( 'scrolled' );

		} else {
			$( '.site-header' ).removeClass( 'scrolled' );
		}



	});

});