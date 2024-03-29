<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">

        <title>Sertificate translator - Admin</title>
    </head>

    <body>
        <div class="jumbotron bg-info text-white">
            <h1 class="display-4">sertificate translator - Admin</h1>
        </div>
        <form action="<?= base_url("main/print");?>" method="post">
            <div class="container bg-light col-3 col-6">
                <div class="py-1 mx mx-auto text-secondary" styple="width: 600px">
                    <h3></h3>
                    <div class="text-left">
                        please upload your translation request.
                        <br>
                        file must be on .JPG/.JPEG/.PNG/.PDF format
                        <div class="input-group"></div>
                        <div class="custom-file">
                            <input
                                type="file"
                                class="custom-file-input"
                                id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                        </div>
                    </div>
                    *file size must be under 1MB
                    <br>
                    <br>
                </div>
                <button type="submit" href="result" class="btn btn-primary btn-user btn-block">
                    upload
                </button>
                <hr>
            </form>
            <div class="text-center">
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script
                    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous"></script>
                <script
                    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                    crossorigin="anonymous"></script>
            </body>

        </html>