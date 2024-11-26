// public/js/firebase.js
const firebaseConfig = {
    apiKey: "AIzaSyDxW1e7hZTJ0gOTR2A5Xkxl1dsjmsxyz",  
    authDomain: "m12-proyecto.firebaseapp.com", 
    databaseURL: "https://m12-proyecto-default-rtdb.firebaseio.com", 
    projectId: "m12-proyecto",  
    storageBucket: "m12-proyecto.appspot.com", 
    messagingSenderId: "109360802652583660232", 
    appId: "1:109360802652583660232:web:9b8a1b2bc0f2388b124c68",  
};

// Inicializa Firebase
const app = firebase.initializeApp(firebaseConfig);
const database = firebase.database();