function send_message() {
    let formInput = document.getElementById('contact-form');
    const formData = new FormData(formInput);

    document.getElementById('submit').disabled = true;

    fetch('data_process.php', {
        method: 'POST',
        body: formData
    }).then((response => {
        if(response.status == 200) {
            document.getElementById('contact-form').reset();
            document.getElementById('submit').disabled = false

            return response.text();
        }
        return response.statusText;
    }))
    .then(data => {
        document.getElementById('info-message').innerHTML = data
        
        setInterval(function(){
            document.getElementById('info-message').innerHTML = '';
        }, 2000);
    })
}