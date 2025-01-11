( function( window, document ) {
  function sports_hub_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const sports_hub_nav = document.querySelector( '.sidenav' );
      if ( ! sports_hub_nav || ! sports_hub_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...sports_hub_nav.querySelectorAll( 'input, a, button' )],
        sports_hub_lastEl = elements[ elements.length - 1 ],
        sports_hub_firstEl = elements[0],
        sports_hub_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && sports_hub_lastEl === sports_hub_activeEl ) {
        e.preventDefault();
        sports_hub_firstEl.focus();
      }
      if ( shiftKey && tabKey && sports_hub_firstEl === sports_hub_activeEl ) {
        e.preventDefault();
        sports_hub_lastEl.focus();
      }
    } );
  }
  sports_hub_keepFocusInMenu();
} )( window, document );