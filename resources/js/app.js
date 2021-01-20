require('./bootstrap');

// Import VUE
import Vue from 'vue';

// Nuova istanza Vue
const app = new Vue({
    // Elemento di riferimento html #app
    el: '#app',

    // Nei data inizializzo un array vuoto che popolo con la chiamata Axios all'API 
    data: {
        bikes: []
    },

    // Created fa partire l'inizializzazione al lancio (render) della pagina similarmente a come si comporta __construct per le classi
    created() {
        // Request all'URL dell'API che mi sono creato in formato JSON
        axios.get('http://127.0.0.1:8000/api/bikes')
        .then(response => {
            // handle success
            console.log(response.data);
            // Popolo l'array inizializzato nei data con i data dell'API
            this.bikes = response.data
        })
        .catch(error => {
            // handle error
            console.log(error);
        });
    }

});


