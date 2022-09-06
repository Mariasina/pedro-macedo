

/* Começo Menu */
(function() {

	'use strict';

	const ClickyMenus = function( menu ) {

		// DOM element(s)
		let	container = menu.parentElement,
			currentMenuItem,
			i,
			len;

		this.init = function() {
			menuSetup();
			document.addEventListener( 'click', closeOpenMenu );
		}


		/*===================================================
		=            Abrir e Fechar Menu Funções            =
		===================================================*/
		function toggleOnMenuClick( e ) {

			const button = e.currentTarget;

			// fecha e abre menu se há um dropdown
			if ( currentMenuItem && button !== currentMenuItem ) {
				toggleSubmenu( currentMenuItem );
			}

			toggleSubmenu( button );

		};

		function toggleSubmenu( button ) {

			const submenu = document.getElementById( button.getAttribute( 'aria-controls' ) );

			if ( 'true' === button.getAttribute( 'aria-expanded' ) ) {

				button.setAttribute( 'aria-expanded', false );
				submenu.setAttribute( 'aria-hidden', true );
				currentMenuItem = false;

			} else {

				button.setAttribute( 'aria-expanded', true );
				submenu.setAttribute( 'aria-hidden', false );
				preventOffScreenSubmenu( submenu );
				currentMenuItem = button;

			}

		};

		function preventOffScreenSubmenu( submenu ) {

			const 	screenWidth =	window.innerWidth ||
									document.documentElement.clientWidth ||
									document.body.clientWidth,
					parent = submenu.offsetParent,
					menuLeftEdge = parent.getBoundingClientRect().left,
					menuRightEdge = menuLeftEdge + submenu.offsetWidth;

			if ( menuRightEdge + 32 > screenWidth ) { // adding 32 so it's not too close
				submenu.classList.add( 'sub-menu--right' );
			}

		}

		function closeOnEscKey(e) {

			if(	27 === e.keyCode ) {

				// um item de submenu
				if( null !== e.target.closest('ul[aria-hidden="false"]') ) {
					currentMenuItem.focus();
					toggleSubmenu( currentMenuItem );

				// estamos em um item pai
				} else if ( 'true' === e.target.getAttribute('aria-expanded') ) {
					toggleSubmenu( currentMenuItem );
				}

			}

		}

		function closeOpenMenu( e ) {

			if ( currentMenuItem && ! e.target.closest( '#' + container.id ) ) {
				toggleSubmenu( currentMenuItem );
			}

		};

		/*===========================================================
		=     Modificar marcação de menu e vincular ouvintes        =
		=============================================================*/
		function menuSetup() {

			menu.classList.remove('no-js');

			menu.querySelectorAll('ul').forEach( ( submenu ) => {

				const menuItem = submenu.parentElement;

				if ( 'undefined' !== typeof submenu ) {

					let button = convertLinkToButton( menuItem );

					setUpAria( submenu, button );

					// bind event listener to button
					button.addEventListener( 'click', toggleOnMenuClick );
					menu.addEventListener( 'keyup', closeOnEscKey );

				}

			});

		};
		function convertLinkToButton( menuItem ) {

			const 	link = menuItem.getElementsByTagName( 'a' )[0],
					linkHTML = link.innerHTML,
					linkAtts = link.attributes,
					button = document.createElement( 'button' );

			if( null !== link ) {

				// definir o conteúdo e os atributos do botão
				button.innerHTML = linkHTML.trim();
				for( i = 0, len = linkAtts.length; i < len; i++ ) {
					let attr = linkAtts[i];
					if( 'href' !== attr.name ) {
						button.setAttribute( attr.name, attr.value );
					}
				}

				menuItem.replaceChild( button, link );

			}

			return button;

		}

		function setUpAria( submenu, button ) {

			const submenuId = submenu.getAttribute( 'id' );

			let id;
			if( null === submenuId ) {
				id = button.textContent.trim().replace(/\s+/g, '-').toLowerCase() + '-submenu';
			} else {
				id = menuItemId + '-submenu';
			}

			// define botão ARIA
			button.setAttribute( 'aria-controls', id );
			button.setAttribute( 'aria-expanded', false );

			// define submenu ARIA
			submenu.setAttribute( 'id', id );
			submenu.setAttribute( 'aria-hidden', true );

		}

	}

	/* Cria o ClickMenus e inicia o menu para qualquer menu com a classe .clicky-menu */
	document.addEventListener('DOMContentLoaded', function(){
		const menus = document.querySelectorAll( '.clicky-menu' );

		menus.forEach( menu => {

			let clickyMenu = new ClickyMenus(menu);
			clickyMenu.init();

		});
	});

}());
//Fim Do

//Começo do carrossel
document.addEventListener('DOMContentLoaded', function() {
 
	const carousels = document.querySelectorAll('.carousel');
	carousels.forEach(function( carousel ) {
  
	  const ele = carousel.querySelector('ul');
	  const scrolllength = carousel.querySelector('ul li:nth-child(2)').offsetLeft - carousel.querySelector('ul li:nth-child(1)').offsetLeft;
	  const amountvisible = Math.round(ele.offsetWidth/scrolllength);
	  const bullets = carousel.querySelectorAll('ol li');
	  const nextarrow = carousel.querySelector('.next');
	  const prevarrow = carousel.querySelector('.prev');
	  bullets[0].classList.add('selected');
	  var removeels = carousel.querySelectorAll('ol li:nth-last-child(-n + '+(amountvisible-1)+')');
	  removeels.forEach(function(removeel) {
		removeel.remove();
	  });
	  
	  const setSelected = function() {
		  bullets.forEach(function(bullet) {
			 bullet.classList.remove('selected');
		  });
		  let nthchild = (Math.round((ele.scrollLeft/scrolllength)+1));
		  carousel.querySelector('ol li:nth-child('+nthchild+')').classList.add('selected'); 
	  }
  
	  const scrollTo = function(event) {
		event.preventDefault();
		ele.scrollLeft = ele.querySelector(this.getAttribute('href')).offsetLeft;
	  }
	  
	  const nextSlide = function() {
		if(!carousel.querySelector('ol li:last-child').classList.contains('selected')) {
		  carousel.querySelector('ol li.selected').nextElementSibling.querySelector('a').click();
		} else {
		  carousel.querySelector('ol li:first-child a').click();
		}
	  }
  
	  const prevSlide = function() {
		if(!carousel.querySelector('ol li:first-child').classList.contains('selected')) {
		  carousel.querySelector('ol li.selected').previousElementSibling.querySelector('a').click();
		} else {
		  carousel.querySelector('ol li:last-child a').click();
		}
	  }
		
	  // Attach the handlers
	  ele.addEventListener("scroll", debounce (setSelected));
	  nextarrow.addEventListener("click", nextSlide);
	  prevarrow.addEventListener("click", prevSlide);
	  bullets.forEach(function(bullet) {
		  bullet.querySelector('a').addEventListener('click', scrollTo);
	  });
	  
	  //setInterval for autoplay
	  if(carousel.getAttribute('duration')) {
		setInterval(function(){ 
		if (ele != document.querySelector(".carousel:hover ul")) {
			nextarrow.click();
		}
		}, carousel.getAttribute('duration'));
	  }
	  
	}); //end foreach
	
  }); //end onload
  
  
  
  
  /**
   * Debounce functions for better performance
   * (c) 2021 Chris Ferdinandi, MIT License, https://gomakethings.com
   * @param  {Function} fn The function to debounce
   */
  function debounce (fn) {
	  // Setup a timer
	  let timeout;
	  // Return a function to run debounced
	  return function () {
		  // Setup the arguments
		  let context = this;
		  let args = arguments;
		  // If there's a timer, cancel it
		  if (timeout) {
			  window.cancelAnimationFrame(timeout);
		  }
		  // Setup the new requestAnimationFrame()
		  timeout = window.requestAnimationFrame(function () {
			  fn.apply(context, args);
		  });
	  };
  }
