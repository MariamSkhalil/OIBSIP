document.getElementById('reserve_train').addEventListener('click', function(event) {
    event.preventDefault();
    var userid = document.getElementById('userid').value;
    var train_number = document.getElementById('train_number').value;
    var train_name = document.getElementById('train_name').value;
    var clasS = document.getElementById('class').value;
    var start_date = document.getElementById('start_date').value;
    var fromPlace = document.getElementById('fromPlace').value;
    var toDestination = document.getElementById('toDestination').value;
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = xhr.responseText;
          if (response === 'success') {
            alert('Reservation successful');
            window.location.href = 'welcome.php';
          } else {
            alert('Reservation incomplete');
          }
        } else {
          alert('An error occurred');
        }
      }
    };
  
    xhr.open('POST', 'res.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('reserve_train=true' +
    '&userid=' + encodeURIComponent(userid) +
    '&train_number=' + encodeURIComponent(train_number) +
    '&train_name=' + encodeURIComponent(train_name) +
    '&class=' + encodeURIComponent(clasS) +
    '&start_date=' + encodeURIComponent(start_date) +
    '&fromPlace=' + encodeURIComponent(fromPlace)+
    '&toDestination=' + encodeURIComponent(toDestination)
    );
  });