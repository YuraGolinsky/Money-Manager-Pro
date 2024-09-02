feather.replace();

function openLoginModal() {
  document.getElementById('loginModal').style.display = 'flex';
}

function closeLoginModal() {
  document.getElementById('loginModal').style.display = 'none';
}

function openRegisterModal() {
  document.getElementById('registerModal').style.display = 'flex';
}

function closeRegisterModal() {
  document.getElementById('registerModal').style.display = 'none';
}

function openTelegramBot() {
  window.location.href = "https://t.me/Financial_assistant_your_bot";
}

document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();

  var formData = new FormData(this);

  fetch('login.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      window.location.href = data.redirect;
    } else {
      alert(data.message); // Show error message
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

document.getElementById('registerForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  var formData = new FormData(this);
  
  fetch('register.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      alert('Registration successful!'); // Show success message
      closeRegisterModal();
    } else {
      alert(data.message); // Show error message
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});