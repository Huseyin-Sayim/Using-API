let close_form = document.querySelector('.close_form');

close_form.addEventListener('click', () => {
  document.querySelector('form').classList.add('d-none');
});

document.querySelector('.run_api').addEventListener('click', () => {
  fetch('http://localhost/api/add_person.php', {
    method : 'POST',
    headers : {
      'Content-Type': 'application/json',
      'token': '1234'
    },

    body : JSON.stringify({
      name : 'Hüseyin SAYIM',
      age : 21,
      birthday : '2003-10-08 20:15'
    })
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
    })
});