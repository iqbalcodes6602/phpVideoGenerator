<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f6f9ff;
        }
    </style>
</head>

<body class="antialiased">
    <!-- <div>
        get text on video
    </div>
    <form action="http://127.0.0.1:8000/videos" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <label>First line</label>
            <input name="firstLine" type="text" />
        </div>
        <div>
            <label>Second line</label>
            <input name="secondLine" type="text" />
        </div>
        <div>
            <label>Language</label>
            <select name="language">
                <option value="https://res.cloudinary.com/dcqiakni6/video/upload/v1676629692/videos/mbczzmygbtpomys20vpc.mp4">Hindi</option>
                <option value="https://res.cloudinary.com/dcqiakni6/video/upload/v1676630255/videos/uyfklvpt8qchokcyurar.mp4">Asamese</option>
            </select>
        </div>
        <button type="submit">send</button>
    </form> -->




    <section style="background-color: #f6f9ff;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-4 border">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://i.pinimg.com/236x/07/33/ba/0733ba760b29378474dea0fdbcb97107.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">John Smith</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Follow</button>
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="http://127.0.0.1:8000/videos" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card mb-4">
                            <label class="label m-3">
                                <b>
                                    <center>Genrate text on video</center>
                                </b>
                            </label>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-3">Link of your image</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="imgLink" type="text" class="form-control" placeholder="profile photo link" aria-label="text" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="fullName" type="text" class="form-control" placeholder="Your Name" aria-label="text" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Text for first line</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="firstLine" type="text" class="form-control" placeholder="Some text you want on video" aria-label="text" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Text for second line</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="secondLine" type="text" class="form-control" placeholder="Some text you want on video" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Language</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <select name="language" class="form-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="https://res.cloudinary.com/dcqiakni6/video/upload/v1676629692/videos/mbczzmygbtpomys20vpc.mp4">Hindi</option>
                                                <option value="https://res.cloudinary.com/dcqiakni6/video/upload/v1676630255/videos/uyfklvpt8qchokcyurar.mp4">Assam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">
                                            <button type="submit" class="btn btn-primary ">Generate Video</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>