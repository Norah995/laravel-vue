var urlrol = 'listarole';
new Vue({
	el: '#main',
	//crea
	created: function() {
		this.getUsers();
	},
	data: {
		lists: []
	},
	methods: {
	//aca esta los datos
		getUsers: function() {
			axios.get(urlrol).then(response => {
						this.lists = response.data
			});
		}
	}	
});			