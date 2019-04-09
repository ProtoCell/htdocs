
let valeur= '';
let res;
let test = new Vue({
  el: '#calculette',
  data:{
  },
  methods: {
    Add: function (symbole) {
      valeur += symbole;
      console.log(valeur)
    },
   Resultat:function(){
    res = eval(valeur)
    console.log(res)
    let resu = document.createElement('span');
    document.getElementById('msg').appendChild(resu)
    resu.appendChild(valeur)
    }
   }
});


