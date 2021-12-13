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
    <title>Submit form with javascript</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <h1>Form submiting with javascript</h1>
            </div>
            <span id="message"></span>
            <form id="sample_form">
                <div class="card">
                    <div class="card-header">Sample form</div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" class="form-control form-data" id="name"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" class="form-control form-data" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control form-data" name="comment" id="comment" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website <span class="text-danger">*</span> </label>
                            <input type="text" name="website" class="form-control form-data" id="website"
                                placeholder="example.com">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span> </label>
                            <select name="gender" class="form-control form-data" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="button" name="submit" id="submit" class="btn btn-primary"
                                onclick="save_data();">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
    function save_data() {
        var formSample = document.getElementById('sample_form');

        var form_data = new FormData(formSample);

        document.getElementById('submit').disabled = true;

        fetch('process_data.php', {
                method: 'POST',
                body: form_data
            }).then(response => {
                if (response.status == 200) {
                    document.getElementById('submit').disabled = false;
                    document.getElementById('sample_form').reset();

                    return response.text();
                }

                return response.statusText;
            })
            .then(data => {
                document.getElementById('message').innerHTML = data;
                setTimeout(function() {
                    document.getElementById('message').innerHTML = ''
                }, 2000)

            })
    }
    </script>

</body>

</html>