// console.log(" Hallo");

function validate (){

 var userInput = document.getElementById('userInput').value.toLowerCase();
 var imageName = document.getElementById('imageName').value.toLowerCase();

 console.log(userInput);
 console.log(imageName);


 if (userInput==imageName) {
     alert (" GOED ");
     if(sessionStorage.getItem("key") === undefined){
        sessionStorage.setItem("key", 0);
    } else{
        total = sessionStorage.getItem("key");
        total++;
        sessionStorage.setItem("key", total);
    }

    // console.log(sessionStorage.getItem("key"));
     window.location.reload()
 }
 else{
 alert ("Helaas probeer nogmaals" );
 return false;
}

}

    