var urlCountry = 'listacountry';

var urlCity = 'listacity'; 
new Vue({
	el: '#main',
	//crea
	created: function() {
		this.getCountry();
		this.getCity();
	},
	data: {
		countries: [],
		cities: []
	},
	methods: {
	//aca esta los datos
		getCountry: function() {
			axios.get(urlCountry).then(response => {
						this.countries = response.data
			});
		},
		getCity: function() {
			axios.get(urlCity).then(response => {
						this.cities = response.data
			});
		}		
	}	
});			