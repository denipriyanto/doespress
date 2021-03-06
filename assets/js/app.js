/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
// require('../css/app.css');

// Import scss file
import '../css/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

$('#articlePostSubmit').click( function(){
	let title = $("#articlePostTitle").val();
	let tag = $('#articlePostTag').val();
	let res = tag.split(" ");
	let postbody = tinyMCE.activeEditor.getContent();

	console.log(title);
	console.log(tag);
	console.log(res)
	console.log(postbody);
});