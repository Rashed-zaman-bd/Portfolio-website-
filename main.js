/*----side navbar start --------*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

/*-----------side navbar end----------*/

/*----------year js start-------------*/

const d = new Date();
document.getElementById("myYear").innerHTML = d.getFullYear();
/*------------------------*/
const b = new Date();
document.getElementById("newYear").innerHTML = b.getFullYear();

/*----------year js end--------------*/

/*------------- active menubar---------------*/

/*--------------end-----------------*/

// Typed Initiate
var typed = new Typed(".text", {
  strings: [
    "Web Designer",
    "Apps Designer",
    "Front-end Web Developer",
    "Full-stack web developer",
    "Apps Developer",
  ],
  typeSpeed: 100,
  backSpeed: 50,
  backDelay: 1000,
  loop: true,
});
/*------------------------*/
