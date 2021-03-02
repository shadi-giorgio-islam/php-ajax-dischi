var app = new Vue({
  el: '#app',
  data: {
    dischi: []
  },
  mounted(){
    axios
    .get('src/server.php')
    .then(response =>{
      this.dischi = response.data;
    })
  }
});
