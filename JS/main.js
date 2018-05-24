
  function postTodo(){
    // x-www-form-urlencoded
    const formData = new FormData();
    const todoInput = document.getElementById('blogInput');
    formData.append('content', blogInput.value);
  
    const postOptions = {
      method: 'POST',
      body: formData,
      // MUCH IMPORTANCE!
      credentials: 'include'
    }
  
    fetch('api/todos', postOptions)
      .then(res => res.json())
      .then((newTodo) => {
          document.body.insertAdjacentHTML('beforeend', newTodo.data.content);
      });
  }
  
  
  function login(){
    const formData = new FormData();
    formData.append('username', 'goran');
    formData.append('password', 'bunneltan');
    const postOptions = {
      method: 'POST',
      body: formData,
      // DON'T FORGET
      credentials: 'include'
    }
  
    fetch('/login', postOptions)
      .then(res => res.json())
      .then(console.log);
  }
  
  const form = document.getElementById('newTodo');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
  });
  
  const addTodoButton = document.getElementById('addTodo');
  addTodoButton.addEventListener('click', postTodo);