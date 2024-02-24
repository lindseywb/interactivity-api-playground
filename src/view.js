/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

store( 'create-block', {
	actions: {
		toggle: () => {
			const context = getContext();
			context.isOpen = ! context.isOpen;
		},
		updateIsInView: (event) => {
			const context = getContext();
			console.log(event)
			// var rect = element.getBoundingClientRect();
			// var html = document.documentElement;
			// return (
			// 	rect.top >= 0 &&
			// 	rect.left >= 0 &&
			// 	rect.bottom <= (window.innerHeight || html.clientHeight) &&
			// 	rect.right <= (window.innerWidth || html.clientWidth)
			// );
			context.isInView = true;
			console.log('scrolling')
		}
	},
	callbacks: {
		logIsOpen: () => {
			const { isOpen } = getContext();
			// Log the value of `isOpen` each time it changes.
			console.log( `Is open: ${ isOpen }` );
		},
		logIsInView: () => {
			const { isInView } = getContext();
			// Log the value of `isInView` each time it changes.
			console.log( `Is in view: ${ isInView }` );
		}
	},
} );
