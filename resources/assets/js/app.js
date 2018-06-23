window.onload = function() {
  // loginSignup scripts

  // Top card button
  let logIn = document.querySelector("._logIn");
  /////////////////////////////////////////////////
  // bottom card button
  let signBtn = document.querySelector("._signup");
  // //////////////////////////////////////////////
  // Errors
  let liError = document.querySelector(".error");
  let elForm = document.querySelector("#theForm");
  // /////////////////////////////////////////////

  // Options modal
  let modal = document.getElementById("simpleModal");
  // open modal button
  var modalBtn = document.getElementById("modalclick");
  // Cancel button
  let cancel = document.getElementById("cancelBtn");
  // //////////////////////////////////////////////////

  // Open modal
  if (modalBtn) {
    modalBtn.addEventListener("click", openModal);
  }

  // Close modal
  if (cancel) {
    cancel.addEventListener("click", closeModal);
  }

  // Close by outside modal
  if (modal) {
    modal.addEventListener("click", outsideClick);
  }
};

function openModal() {
  modal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = "none";
  }
}

function chk(e) {

  var email = document.querySelector('#email').value;
  var dataString = 'email=' + email;
  e.preventDefault();
  $.ajax({
    type: 'post',
      data: dataString,
      cache: false,
      url: "<?php echo url('/signup') ?>",
      success:function(data){
        console.log(data);
      }
  });
}
