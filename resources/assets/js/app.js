// loginSignup script
let signUp = document.querySelector('.signUp');
let logIn = document.querySelector('.logIn');
let div = document.querySelector('.signIn');
let div2 = document.querySelector('.sign-Up');
let liError = document.querySelector('.error');
let signBtn = document.querySelector('._signup');
let elForm = document.querySelector('#theForm');
// modal
let modal = document.getElementById("simpleModal");
// open modal button
let modalBtn = document.querySelector(".modalclick");
// Cancel button
let cancel = document.getElementById("cancelBtn");

// Open modal
modalBtn.addEventListener('click', function() {
  modal.style.display = 'block';
});

// Close modal
cancel.addEventListener('click', function() {
  modal.style.display = 'none';
});
// Close by outside modal
modal.addEventListener('click', function() {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

signUp.addEventListener('click', function() {
  if (div2.classList.contains('visible-md')) {
    div2.classList.remove('visible-md')
    div.classList.add('visible-md')
  }
});

logIn.addEventListener('click', function() {
  if (div.classList.contains('visible-md')) {
    div.classList.remove('visible-md')
    div2.classList.add('visible-md')
  }
});

// function chk(e) {
//
//   var email = document.querySelector('#email').value;
//   var dataString = 'email=' + email;
//   e.preventDefault();
//   $.ajax({
//     type: 'post',
//       data: dataString,
//       cache: false,
//       url: "<?php echo url('/signup') ?>",
//       success:function(data){
//         console.log(data);
//       }
//   });
//
// };
