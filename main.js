
//adding active to navbar
let navbar = document.querySelectorAll(".nav-link");
Array.from(navbar).forEach(function(ele) {
  console.log(ele);
  ele.addEventListener("click", function() {
    ele.className += " active";
    alert("test");
  })
});
