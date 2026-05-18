fetch('http://localhost:3000/')
  .then(res => res.json())
  .then(data => console.log(data))
  .catch(err => console.error('Error:', err));

fetch('http://localhost:3000/usuario')
  .then(res => res.json())
  .then(data => console.log(data))
  .catch(err => console.error('Error:', err));