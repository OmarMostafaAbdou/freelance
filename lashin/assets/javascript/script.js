 //------------from chatgpt-----------------
 // هنا بنخزن قيمة المكان اللى انت واقف فيه فى الصغخة من المحور الرأسى(Y)
 let prevScrollPos = window.pageYOffset;

 const navbar = document.querySelector('.navbar');
 
 window.addEventListener('scroll', () => {
// هنا نفس اللى فوق بس فى فاريبال جديد وبيتحدثكل م تسكرول 
   const currentScrollPos = window.pageYOffset;

   // Check the scroll direction
   // الفكرة هنا احنا لما بنسكرول لفوق القيمة بتقل 
   // ف هنا بنقوله لو القيمة السابقة اكبر من الجديدة 
   // كده معناها سكرول لفوق 
   if (prevScrollPos > currentScrollPos) {
     // Scrolling up, show the navbar
     navbar.style.top = '0';
   } else {
     // اما لو القيمة الحالية اكبر من القيمة السابقة كده معناها بتسكرول لتحت
     // وبتحدد طول الناف بار وبتخلى قيمته بالسالب ف كده هيطلع لفوقبرا الصفحة ومش هيكون ظاهر
     navbar.style.top = `-${navbar.offsetHeight}px`;
     
   }
 
   // Save the current scroll position for the next iteration
   prevScrollPos = currentScrollPos;
 });


 //-----------------slides moving--------------------

var services = document.querySelectorAll('.single-service');
var nextButton = document.getElementById('next')
var backButton = document.getElementById('back')


var counter = 0;

services.forEach(
  (service,index) => {

  service.style.left =`${index * 100}%`;
  return service;
  
});


function next(){

  if(counter<(services.length-1)){
    counter++;
  slideServices();
  }

  
}
function prev(){

  
  if(counter>0){
    counter--;
    slideServices();
    
  }
}


function slideServices()  {
  
  
  services.forEach(
    (service) => {
      
    service.style.transform =`translateX(-${counter * 100}%)`;
    
  });

  
}


//------------------------ change background color -------------------------

var first_color = document.getElementById('first');
var seconde_btn = document.getElementById('seconde');
var third_btn = document.getElementById('third');

function changeBackground(color) {

document.body.style.backgroundColor=color;

}
