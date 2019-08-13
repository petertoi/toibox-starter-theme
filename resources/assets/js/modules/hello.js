// /* global $ */
const hello = () => {
	const world = 'world';
	console.log( `Hello ${ world }` );
};

export default {
	init() {
		hello();
	},
};
