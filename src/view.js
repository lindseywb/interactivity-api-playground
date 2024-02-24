/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

store( 'create-block', {
	// actions: {

	// },
	callbacks: {
		logTimeInit: () => {

			const todaysDate = new Date();
			const christmas = new Date( todaysDate.getFullYear(), 11, 25 );
			const context = getContext();
			const daysUntilChristmas = Math.ceil( ( christmas - todaysDate ) / ( 1000 * 60 * 60 * 24 ) )

			context.currentDate = todaysDate.toLocaleString();
			context.days = daysUntilChristmas;
		},
		getDaysUntilChristmas: () => {
			const context = getContext();
			// context.isOpen = ! context.isOpen;
			console.log('daysuntilchristmas', context.days)
		},
	},
} );
