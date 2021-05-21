import { MY_API_KEY } from './config.js';

fetch("https://quotes15.p.rapidapi.com/quotes/random/", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": MY_API_KEY,
		"x-rapidapi-host": "quotes15.p.rapidapi.com"
	}
})
	.then(response => response.json())
	.then(response => {
		console.log(response);
		console.log(response.content);
		document.getElementById('quote').innerHTML = response.content;
		document.getElementById('author').innerHTML = '- ' + response.originator.name + ' -';
	})
	.catch(err => {
		console.error(err);
	});