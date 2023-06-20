$(document).ready(function() {
  
  /** Navigation menu mobile */
  $(".dropdown-icon.open.active").click(function(){
    $(this).toggleClass("active");
    $('.primary-menu-container').toggleClass("active");
  });



  /* Header Form (Book Appointment) */
  $('#bookAppointmentForm').submit(function(e) {
    e.preventDefault();

    $("#bookAppointmentForm .errmsg").empty();

    let isValid = true;

    /* Name validation */
    const namePattern = /^[a-zA-Z'\s]+$/;
    const book_name = $("#book_name").val().trim();

    if (book_name === "") {
      $("#nameErr").text("Name is required!");
      isValid = false;
    } else if (!namePattern.test(book_name)) {
      $("#nameErr").text("Invalid name format!");
      isValid = false;
    }

    /** Check email field */
    const emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
    const book_email = $("#book_email").val().trim();

    if (book_email === "") {
      $("#emailErr").text("Email is required!");
      isValid = false;
    } else if (!emailPattern.test(book_email)) {
      $("#emailErr").text("Invalid email format!");
      isValid = false;
    }
    
    /** Check select fields */
    const book_department = $('#book_department').val();
    if (book_department === "") {
      $("#depErr").text("Please select an option!");
      isValid = false;
    }

    const book_time = $('#book_time').val();
    if (book_time === "") {
      $("#timeErr").text("Please select an option!");
      isValid = false;
    }

    if (isValid) {
      $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: {
            action: 'book_appointment',
            book_name: book_name,
            book_email: book_email,
            book_department: book_department,
            book_time: book_time
          },
          success: function(response) {
            console.log('Data added successfully');
            $('#book_name').val('');
            $('#book_email').val('');
            $('#book_department').val('');
            $('#book_time').val('');
          }
      });
    }
  });

  /* Footer Form (Make Appointment) */
  $('#makeAppointmentForm').submit(function(e) {
    e.preventDefault();

    $("#makeAppointmentForm .errmsg").empty();

    let isValid = true;

    /* Name validation */
    const namePattern = /^[a-zA-Z'\s]+$/;
    const make_name = $("#make_name").val().trim();

    if (make_name === "") {
      $("#nameErr").text("Name is required!");
      isValid = false;
    } else if (!namePattern.test(make_name)) {
      $("#nameErr").text("Invalid name format!");
      isValid = false;
    }

    /** Check email field */
    const emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
    const make_email = $("#make_email").val().trim();

    if (make_email === "") {
      $("#emailErr").text("Email is required!");
      isValid = false;
    } else if (!emailPattern.test(make_email)) {
      $("#emailErr").text("Invalid email format!");
      isValid = false;
    }
    
    /** Check select fields */
    const make_department = $('#make_department').val();
    if (make_department === "") {
      $("#depErr").text("Please select an option!");
      isValid = false;
    }

    const make_time = $('#make_time').val();
    if (make_time === "") {
      $("#timeErr").text("Please select an option!");
      isValid = false;
    }

    const make_message = $('#make_message').val();
    if (make_message === "") {
      $("#messErr").text("Message is required!");
      isValid = false;
    }

    if (isValid) {
      $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: {
            action: 'make_appointment',
            make_name: make_name,
            make_email: make_email,
            make_department: make_department,
            make_time: make_time,
            make_message: make_message
          },
          success: function(response) {
            console.log('Data added successfully');
            $('#make_name').val('');
            $('#make_email').val('');
            $('#make_department').val('');
            $('#make_time').val('');
            $('#make_message').val('');
          }
      });
    }
  });

});


/* Import Swiper and modules */
import Swiper from 'swiper';

const swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 25,
  centeredSlides: true,
  initialSlide: 0,
  keyboardControl: true,
  grabCursor: true,
  enabled: true,

  breakpoints: {  
    320: {       
      slidesPerView: 1,       
      spaceBetween: 0,
      enabled: false, 
    },     
    480: {       
      slidesPerView: 1,       
      spaceBetween: 0,
      enabled: false,     
    },   
    640: {       
      slidesPerView: 3,
      spaceBetween: 25,
      enabled: true,    
    } 
  } 
});

const swiper2 = new Swiper(".swiper-review", {
  slidesPerView: 3,
  spaceBetween: 25,
  centeredSlides: true,
  initialSlide: 0,
  keyboardControl: true,
  grabCursor: true,
  enabled: true,

  breakpoints: {  
    320: {       
      slidesPerView: 1,       
      spaceBetween: 0,
      enabled: false, 
    },     
    480: {       
      slidesPerView: 1,       
      spaceBetween: 0,
      enabled: false,     
    },   
    640: {       
      slidesPerView: 3,
      spaceBetween: 25,
      enabled: true,    
    } 
  } 
});
