const email = document.getElementById('email');
const password = document.getElementById('password');
function handleSubmit (e) {
  e.preventDefault();
  console.log(JSON.stringify(email, password))
}