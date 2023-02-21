let bulbDark= document.querySelector('#bulbDark');
let bulbLight= document.querySelector('#bulbLight');

let btnMode=document.querySelector('#btnMode');
let inEvidenza=document.querySelectorAll('.inEvidenza');

let isClicked = true;

/* local storage, per far ricordare la dark mode  */

let storage = localStorage.getItem('mode');

if(storage == 'dark'){

    localStorage.setItem('mode','dark');

    document.documentElement.style.setProperty('--white', 'rgb(38, 38, 38)');
    document.documentElement.style.setProperty('--main-blue', 'rgb(38, 38, 38)');

    bulbDark.classList.remove('d-none');
    bulbLight.classList.add('d-none');

    btnMode.style.backgroundColor="#262626";

    inEvidenza.forEach((inEvidenza) => {
        inEvidenza.style.color="white";
    });
    


} else {

    localStorage.setItem('mode','light');

    localStorage.setItem('mode', 'light');

    document.documentElement.style.setProperty('--white', '--white');
    document.documentElement.style.setProperty('--main-blue', 'rgb(0, 48, 73)');

    bulbDark.classList.add('d-none');
    bulbLight.classList.remove('d-none');

    btnMode.style.backgroundColor="#003049";

    inEvidenza.forEach((inEvidenza) => {
        inEvidenza.style.color="black";
    });
    

    isClicked = true;

}

/* fine local storage, per far ricordare la dark mode  */


/* evento dark mode al click sul bottone  */

btnMode.addEventListener('click', ()=>{

    if(isClicked == true){

        localStorage.setItem('mode', 'dark');

        document.documentElement.style.setProperty('--white', 'rgb(38, 38, 38)');
        document.documentElement.style.setProperty('--main-blue', 'rgb(38,38,38)');
    
        bulbDark.classList.remove('d-none');
        bulbLight.classList.add('d-none');
    
        btnMode.style.backgroundColor="#262626";
    
        inEvidenza.forEach((inEvidenza) => {
            inEvidenza.style.color="white";
        });
        

        isClicked = false;

    } else {

        localStorage.setItem('mode', 'light');

        document.documentElement.style.setProperty('--white', '--white');
        document.documentElement.style.setProperty('--main-blue', 'rgb(0, 48, 73)');

        bulbDark.classList.add('d-none');
        bulbLight.classList.remove('d-none');
    
        btnMode.style.backgroundColor="#003049";
    
        inEvidenza.forEach((inEvidenza) => {
            inEvidenza.style.color="black";
        });
        

        isClicked = true;
    } 
})
/* fine evento dark mode al click sul bottone  */