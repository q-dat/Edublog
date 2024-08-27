(function($) {
	'use strict';
	$( document ).on(
		'click',
		'a[data-tsvg-action="copy"],a[data-tsvg-action="delete"],a[data-tsvg-action="copy-to"]',
		function() {
			let tsvgAction = $( this ).attr( 'data-tsvg-action' );
			$( '#tsvg-confirm-content' ).find( '#tsvg_theme_input' ).remove();
			$( '#tsvg-confirm-content' ).children( 'footer' ).find( 'form' ).removeClass( 'copy-theme' );
			if (tsvgAction == 'copy') {
				document.querySelector( ':root' ).style.setProperty( '--tsvg_action', '#5534a9' );
				$( '#tsvg-confirm-content' ).children( 'header' ).children( 'div' ).html( `<i class="ts-vgallery ts-vgallery-files-o"></i>` );
				$( '#tsvg-confirm-content' ).find( '.tsvg-submit-btn' ).val( 'Copy' );
				$( '#tsvg-action-input' ).val( 'bulk-copy' );
			} else if (tsvgAction == 'copy-to') {
				let tsvgTheme = $( this ).attr( 'data-tsvg-theme' );
				$( '#tsvg-confirm-content' ).children( 'footer' ).find( 'form' ).addClass( 'copy-theme' );
				$( '#tsvg-confirm-content' ).children( 'header' ).children( 'div' ).html( `<i class="ts-vgallery ts-vgallery-files-o"></i>` );
				$( '#tsvg-confirm-content' ).find( '.tsvg-submit-btn' ).val( 'Copy theme' );
				$( '#tsvg-action-input' ).val( 'copy_with_change_theme' );
				$( '#tsvg-confirm-content' ).children( 'footer' ).find( '.tsvg-cancel-btn' ).before(
					`
					<select  id="tsvg_theme_input" name="tsvg_theme_input" >
						<option value="Grid Video Gallery" > Grid Video Gallery </option>
						<option value="LightBox Video Gallery" > LightBox Video Gallery </option>
						<option value="Thumbnails Video" > Thumbnails Video </option>
						<option value="Content Popup" > Content Popup </option>
						<option value="Elastic Gallery" > Elastic Gallery </option>
						<option value="Fancy Gallery" > Fancy Gallery </option>
						<option value="Parallax Engine" > Parallax Engine </option>
						<option value="Classic Gallery" > Classic Gallery </option>
						<option value="Space Gallery" > Space Gallery </option>
					</select> 
					`
				);
				$( "#tsvg_theme_input" ).attr( "selected", false );
				$( "#tsvg_theme_input option[ value='" + tsvgTheme + "']" ).attr( "selected", true );
			} else {
				document.querySelector( ':root' ).style.setProperty( '--tsvg_action', '#ff0000' );
				$( '#tsvg-confirm-content' ).children( 'header' ).children( 'div' ).html( `<i class="ts-vgallery ts-vgallery-trash"></i>` );
				$( '#tsvg-confirm-content' ).find( '.tsvg-submit-btn' ).val( 'Delete' );
				$( '#tsvg-action-input' ).val( 'bulk-delete' );
			}
			$( '#tsvg-confirm-content' ).children( 'main' ).html( `Do you really want to ${tsvgAction == 'copy-to' ? "copy" : tsvgAction} this records ? This process cannot be undone.` )
			$( '#tsvg-action-item' ).val( $( this ).attr( 'data-tsvg-id' ) );
			$( '#tsvg-confirm-modal' ).css( 'display', '' );
		}
	);
	$( document ).on(
		'click',
		'#tsvg-confirm-content',
		function(event) {
			event.stopPropagation();
		}
	);
	$( document ).on(
		'click',
		'#tsvg-confirm-modal',
		function() {
			$( '#tsvg-confirm-content' ).addClass( 'tsvg-shake-anim' );
			setTimeout( () => { $( '#tsvg-confirm-content' ).removeClass( 'tsvg-shake-anim' ); }, 500 );
		}
	);
	$( document ).on(
		'click',
		'.tsvg-cancel-btn,#tsvg-close-btn',
		function() {
			$( '#tsvg-confirm-modal' ).css( 'display', 'none' );
		}
	);
	var tsvgClicked=0;
	$( document ).on(
		'click',
		'.tsvg-submit-btn',
		function() {
			if (tsvgClicked >= 1) {
				$( this ).prop( 'disabled', true );
			}
			tsvgClicked++;
		}
	);
	$( document ).on(
		'click',
		'#tsvg-manager-form td.column-id>span',
		function(event) {
			event.stopPropagation();
			event.preventDefault();
			$( this ).html( "Copied!" );
			var tsvgCreateInput=document.createElement( "input" );
			tsvgCreateInput.setAttribute( "value", `[TS_Video_Gallery id="${$(this).attr("data-tsvg-id")}"]` );
			document.body.appendChild( tsvgCreateInput );
			tsvgCreateInput.select();
			document.execCommand( "copy" );
			document.body.removeChild( tsvgCreateInput );
			setTimeout( () => { $( this ).html( "Copy!" ); }, 1000 );
		}
	);
})( jQuery );
