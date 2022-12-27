let range = document.getElementById("range");
const levels = ['Nem elégedett 😠','Átlagos 😒','Elégedett 😊','Nagyon elégedett 😍'];
console.log(levels);
range.addEventListener('change',()=>{
    let value = range.value;
    let text = document.getElementById("text");
    if(value == 4){
        text.innerHTML = levels[3];
    }
    if(value == 3){
        text.innerHTML = levels[2];
    }
    if(value == 2){
        text.innerHTML = levels[1];
    }
    if(value == 1){
        text.innerHTML = levels[0];
    }
});
