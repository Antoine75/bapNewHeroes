const { FALSE } = require("node-sass");

/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );


function redirect(){
	window.location.href = "http://localhost/NewHeroes/wordpress/connexion/";
}


/* Reglage */

function Appear(){
	document.getElementById("reglage").classList.toggle("display_block");
}


/* Checkbox */

function GereChkbox() {   

	if(document.getElementById("checkbox1").checked)   
	{   
	document.getElementById("checkbox2").disabled = "disabled"; 
	document.getElementById("checkbox3").disabled = "disabled";   
	document.getElementById("checkbox1").disabled = "disabled";   
	}   
	else if(document.getElementById("checkbox2").checked)   
	{   
	document.getElementById("checkbox1").disabled = "disabled";   
	document.getElementById("checkbox3").disabled = "disabled";   
	document.getElementById("checkbox2").disabled = "disabled";   
	}   
	else if(document.getElementById("checkbox3").checked)   
	{   
	document.getElementById("checkbox1").disabled = "disabled";   
	document.getElementById("checkbox2").disabled = "disabled";   
	document.getElementById("checkbox3").disabled = "disabled";   
	}   
	else {   
	
	document.getElementById("checkbox1").disabled = "";   
	document.getElementById("checkbox2").disabled = ""; 
	document.getElementById("checkbox3").disabled = "";  
	}   
	
	} 

/* Button retirer les filtres */

function DisableChkbox(){
	document.getElementById("checkbox1").checked = false;   
	document.getElementById("checkbox2").checked = false;
	document.getElementById("checkbox3").checked = false; 
	document.getElementById("checkbox1").disabled = "";   
	document.getElementById("checkbox2").disabled = ""; 
	document.getElementById("checkbox3").disabled = ""; 

	var spo = document.querySelectorAll('.Sport'), i;

	for (i = 0; i < spo.length; ++i) {
		var div = spo[i].closest('.ar-blog-list');
		div.classList.remove("display_block");
		div.classList.remove("display_none");
	  }

	  var tem = document.querySelectorAll('.T??moignage'), t;

	  for (t = 0; t < tem.length; ++t) {
		var section = tem[t].closest('.ar-blog-list');
		section.classList.remove("display_block");
		section.classList.remove("display_none");
	  }
  
	  var con = document.querySelectorAll('.Conseil'), c;
  
	  for (c = 0; c < con.length; ++c) {
		  var lab = con[c].closest('.ar-blog-list');
		  lab.classList.remove("display_block");
		  lab.classList.remove("display_none");
		}
}



/* Filter */

function filterFunction1(){
	var spo = document.querySelectorAll('.Sport'), i;

	for (i = 0; i < spo.length; ++i) {
		var div = spo[i].closest('.ar-blog-list');
		div.classList.add("display_block");
		div.classList.remove("display_none");
	  }

	var tem = document.querySelectorAll('.Temoignage'), t;

	for (t = 0; t < tem.length; ++t) {
	  var section = tem[t].closest('.ar-blog-list');
	  section.classList.remove("display_block");
	  section.classList.add("display_none");
	}

	var con = document.querySelectorAll('.Conseil'), c;

	for (c = 0; c < con.length; ++c) {
		var lab = con[c].closest('.ar-blog-list');
		lab.classList.remove("display_block");
		lab.classList.add("display_none");
	  }

}

function filterFunction2(){
	var spo = document.querySelectorAll('.Sport'), i;

	for (i = 0; i < spo.length; ++i) {
		var div = spo[i].closest('.ar-blog-list');
		div.classList.remove("display_block");
		div.classList.add("display_none");
	  }

	var tem = document.querySelectorAll('.Temoignage'), t;

	for (t = 0; t < tem.length; ++t) {
	  var section = tem[t].closest('.ar-blog-list');
	  section.classList.add("display_block");
	  section.classList.remove("display_none");
	}

	var con = document.querySelectorAll('.Conseil'), c;

	for (c = 0; c < con.length; ++c) {
		var lab = con[c].closest('.ar-blog-list');
		lab.classList.remove("display_block");
		lab.classList.add("display_none");
	  }
		

}

function filterFunction3(){
	var spo = document.querySelectorAll('.Sport'), i;

	for (i = 0; i < spo.length; ++i) {
		var div = spo[i].closest('.ar-blog-list');
		div.classList.remove("display_block");
		div.classList.add("display_none");
	  }

	var tem = document.querySelectorAll('.Temoignage'), t;

	for (t = 0; t < tem.length; ++t) {
	  var section = tem[t].closest('.ar-blog-list');
	  section.classList.remove("display_block");
	  section.classList.add("display_none");
	}

	var con = document.querySelectorAll('.Conseil'), c;

	for (c = 0; c < con.length; ++c) {
		var lab = con[c].closest('.ar-blog-list');
		lab.classList.add("display_block");
		lab.classList.remove("display_none");
	  }
}

