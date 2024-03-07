document.getElementById('cancel').addEventListener('click', function(event) {
    event.preventDefault();
  
    var pnrNumber = document.getElementById('pnrNumber').value;
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = xhr.responseText;
          if (response === 'success') {
            alert('Reservation Deleted');
            window.location.href = 'welcome.php';
          } else {
            alert('An error occurred');
          }
        } else {
          alert('An error occurred');
        }
      }
    };
  
    xhr.open('POST', 'delete_res.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('cancel=true' +
    '&pnrNumber=' + encodeURIComponent(pnrNumber) );
  });