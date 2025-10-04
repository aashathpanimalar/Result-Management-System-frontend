document.getElementById("loginForm").addEventListener("submit", function(e) {
  e.preventDefault(); // stop page reload

  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  const validUsername = "administrator";
  const validPassword = "admin@123";

  if (!username || !password) {
    alert("Please fill in both fields.");
    return;
  }

  if (username === validUsername && password === validPassword) {
    // Simulate login success — redirect to admin panel
    alert("Login successful!");
    window.location.href = "admin2.html"; // redirect like PHP header()
  } else {
    alert("Username or password is incorrect.");
  }
});
