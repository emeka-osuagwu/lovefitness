new Vue({
	el: '#addCategory',
  
  	data: {
		message: 'Hello Vue.js!',
		name : ''
  	},

  	methods: {
  		postCategory : function (name) {
  			alert(name)
  		}
  	}
})