var app = new Vue({
  el: '#app',
  data: {
    dischi: [],
    generi: [],
    selected: ''
  },
  mounted(){
    axios
    .get('src/server.php')
    .then(response =>{
      this.dischi = response.data;
      this.dischi.forEach((element) => {
        if (!(this.generi.includes(element.genre))){
          this.generi.push(element.genre);
        }
      });
      console.log(this.generi);
    });
  },
});
