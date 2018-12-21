// console.log(" Hallo");

function validate (){

 var userInput = document.getElementById('userInput').value.toLowerCase();
 var imageName = document.getElementById('imageName').value.toLowerCase();

 console.log(userInput);
 console.log(imageName);


 if (userInput==imageName) {
     alert (" GOED ");
     window.location.reload()
 }
 else{
 alert ("Helaas probeer nogmaals" );
 return false;
}

}

