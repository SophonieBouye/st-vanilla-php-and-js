<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Contect US</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="text-center mb-5 mt-5">
                <h1>Contact US</h1>
            </div>
            <span id="info-message"></span>
            <div class="card">
                <div class="card-header">
                    <h1>Contact Form</h1>
                </div>
                <form id="contact-form">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Jhon Doe">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="Message" class="form-label">Your message</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                        <div class="card-footer">
                            <button id="submit" class="btn btn-primary" onclick="return send_message()">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./script.js"></script>
</body>

</html>