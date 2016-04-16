new Vue({
	
	el: '#app',

	props: ['groups'],

	methods: {

		getClass: function () {
			this.$http.get('/login', function (data) {
				this.$set('user', data);
				console.log(data)
			})
		}

	},

	ready: function () {
		this.getClass();
	}

});