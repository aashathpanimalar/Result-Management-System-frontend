document.getElementById("studentForm").addEventListener("submit", function (e) {
  e.preventDefault(); // stop form refresh

  // Run existing validation
  if (!validate()) {
    return; // stop if validation failed
  }

  // If validation passes, show message
  alert("Result uploaded successfully!");

  // Optionally clear the form
  document.getElementById("studentForm").reset();

  // Redirect (like PHP echo link)
  if (confirm("Do you want to upload another result?")) {
    window.location.href = "admin2.html";
  } else {
    window.location.href = "index.html";
  }
});
