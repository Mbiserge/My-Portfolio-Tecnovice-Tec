//side navigation js code

let menuBtn = document.querySelector(".menu-btn");
 let cancelBtn = document. querySelector(".cancel-btn");
 let navBar = document.querySelector(".navbar");
   


 //console.log(num.innerHTML);
 menuBtn.onclick = function() {
    menuBtn.Style.opacity = "0";
    menuBtn.Style.pointerEvents = "none";
    navBar.classList.add("active");

 }

  
 cancelBtn.onclick = function() {
    menuBtn.Style.opacity = "1";
 menuBtn.Style.pointerEvents = "auto";
 navBar.classList.remove("active");
 }

//sticky navigation menu js code
let val;
let nav =document. querySelector("nav");

window.onscroll = function() {
   if(document.documentElement.scrollTop > 20){
      console.log('this is working')
      nav.classList.add("sticky");
   }else{
      nav.classList.remove("sticky");
   }
}
//Toggle the navigation menu





// const menuBtn = document.querySelector('.menu-btn');
// const cancelBtn = document.querySelector('.cancel-btn');
// const menu = document.querySelector('.menu');

// menuBtn.addEventListener('click', () => {
//     menu.classList.add('active');
// });

// cancelBtn.addEventListener('click', () => {
//     menu.classList.remove('active');
// });

// // Scroll to top button functionality
// const scrollBtn = document.querySelector('.scroll-btn a');

// scrollBtn.addEventListener('click', (e) => {
//     e.preventDefault();
//     window.scrollTo({
//         top: 0,
//         behavior: 'smooth'
//     });
// });