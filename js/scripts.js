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
  const testimonials = document.getElementsByClassName('testimonials__testimonial'),
        prev = document.getElementById("prev"),
        next = document.getElementById("next"),
        testimonialsCount = testimonials.length

  let visible = 0

  const prevTestimonial = () => {
    testimonials[visible].classList.remove("show")

    if (visible === 0 ) {
      visible = testimonialsCount - 1
    } else {
      --visible
    }

    testimonials[visible].classList.add("show")
    
  }

  const nextTestimonial = () => {

    testimonials[visible].classList.remove("show")

    if (visible === testimonialsCount - 1 ) {
      visible = 0
    } else {
      ++visible
    }

    testimonials[visible].classList.add("show")

  }

  prev.addEventListener('click', prevTestimonial)
  next.addEventListener('click', nextTestimonial)

  testimonials[0].classList.add("show")

}, false);
