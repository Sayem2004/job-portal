document.querySelector(".update-form").addEventListener("submit", function (e) {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;

  if (name === "") {
    alert("Name is required.");
    return;
  }

  if (email === "") {
    alert("Email is required.");
    return;
  }

});
