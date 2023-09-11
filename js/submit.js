const form = document.querySelector('form')

form.addEventListener('submit', (e) => {
e.preventDefault();
const formData = new FormData(form);
const request = new XMLHttpRequest();
request.open("POST", "formSubmit.php");
request.send(formData);
location.reload();
})
