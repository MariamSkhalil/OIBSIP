document.getElementById('reg_user').addEventListener('click', function(event) {
    event.preventDefault();
  
    var login_id = document.getElementById('login_id').value;
    var fname = document.getElementById('Fname').value;
    var lname = document.getElementById('Lname').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var cpwd = document.getElementById('cpwd').value;
  
    // Perform validation if needed
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        if (response === "success") {
          alert('Registration Done Successfully');
        } else if (response === "exists") {
          alert('login_id Already Exists!!');
        } else {
          alert('Something went wrong');
        }
      }
    };
    xhr.open('POST', 'register.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(
      'reg_user=true' +
      '&login_id=' + encodeURIComponent(login_id) +
      '&Fname=' + encodeURIComponent(fname) +
      '&Lname=' + encodeURIComponent(lname) +
      '&phone=' + encodeURIComponent(phone) +
      '&password=' + encodeURIComponent(password) +
      '&cpwd=' + encodeURIComponent(cpwd)
    );
});