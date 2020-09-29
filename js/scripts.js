document.addEventListener('DOMContentLoaded', function() {
  // navigation
  const button = document.getElementById("nav-toggle")
  const nav = document.getElementById("nav")

  const toggleNav = () => {
    const isOpen = nav.classList.contains("open")
    console.log(isOpen)

    if (isOpen) {
      nav.classList.remove("open")
    } else {
      nav.classList.add("open")
    }
  }
  
  button.addEventListener('click', toggleNav)

  // testimonial

}, false);