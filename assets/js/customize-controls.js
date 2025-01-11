( function( api ) {

	// Extends our custom "sports-hub" section.
	api.sectionConstructor['sports-hub'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );