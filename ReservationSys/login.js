document.getElementById('submit').addEventListener('click', function(event) {
    event.preventDefault();
  
    var login_id = document.getElementById('login_id').value;
    var password = md5(document.getElementById('password').value);
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = xhr.responseText;
          if (response === 'success') {
            alert('Login successful');
            window.location.href = 'welcome.php';
          } else {
            alert('Invalid login_id or password');
          }
        } else {
          alert('An error occurred');
        }
      }
    };
  
    xhr.open('POST', 'loginCustomer.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('login_id=' + login_id + '&password=' + password);
  });