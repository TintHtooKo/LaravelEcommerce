// click button and slide down start
$(document).ready(function(){
    $("button").click(function(){
      $("#para").toggle(1000);
    });
  });
//   click button and slide down end



// scroll and animate start
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
//   scroll and animate end


// responsive nav bar start
const toggleLine = document.querySelector('.line');
        const toggleIcon = document.querySelector('.line img');
        const drop =document.querySelector(".drop");

        toggleLine.onclick = function(){
            drop.classList.toggle('open')
            const isOpen = drop.classList.contains('open')

            toggleIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }

// responsive nav bar end

// total price start
const change=()=>{
  const Total = document.getElementById("total1");
  const Total2 = document.getElementById("total2");
  const qty = document.getElementById("qty");
  totalPrice = Total.value
  Price = Total2.value
  totalQty = qty.value
  Total.value = Price * totalQty
}
// total price end

// shopping cart start
let iconCart = document.querySelector('.icon-cart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');
iconCart.addEventListener('click',()=>{
  body.classList.toggle('showCart')
})

closeCart.addEventListener('click',()=>{
  body.classList.toggle('showCart')
})
// shopping cart end