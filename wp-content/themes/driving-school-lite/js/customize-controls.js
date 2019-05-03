( function( api ) {

	// Extends our custom "driving-school-lite" section.
	api.sectionConstructor['driving-school-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );