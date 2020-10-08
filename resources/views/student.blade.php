<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="styelsheet" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body class="bg-light m-0 p-0" style="box-sizing: border-box;">

    <div class="container">
        @include("navbar")


        <div class="row header-container m-4 justify-content-center">
            <div class="header">
                <h1 style="font-size:3vw;">Student Management System</h1>
            </div>
        </div>

        <!-- Index -->
        @if($layout == 'index')
        <div class="row justify-content-center">
            <section class="col-lg-7">
                @include("studentslist")
            </section>
        </div>
        <!-- End Index -->

        <!-- Create -->
        @elseif($layout == 'create')
        <div class="row">
            <section class="col-lg-7">
                @include("studentslist")
            </section>
            <section class="col-lg-5">

                <div class="card mb-3">
                    <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/d7_images/cover_media/ray-169hero-podcasts-shutterstock.jpg" class="card-img-top" alt="sample image">
                    <div class="card-body">
                        <h5 class="card-title">Enter the inforamtions of a new Student</h5>


                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Roll</label>
                                        <input name="roll" type="text" class="form-control" placeholder="Enter roll">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputState">Department</label>
                                        <select name="department" id="inputState" class="form-control">
                                            <option selected>Choose Department...</option>
                                            <option value="cse">CSE</option>
                                            <option value="ee">EEE</option>
                                            <option value="me">ME</option>
                                            <option value="ce">CE</option>
                                            <option value="ece">ECE</option>
                                            <option value="urp">URP</option>
                                            <option value="te">TE</option>
                                            <option value="urp">MSE</option>
                                            <option value="te">BME</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="firstname" type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="lastname" type="text" class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>CGPA</label>
                                        <input name="cgpa" type="text" class="form-control" placeholder="Enter cgpa">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input name="age" type="text" class="form-control" placeholder="Enter age">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Enter phone 01912345678">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input name="email" type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                            </div>

                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
        <!-- End Create -->

        <!-- Show -->
        @elseif($layout == 'show')
        <div class="row">
            <section class="col-lg-7">
                @include("studentslist")
            </section>
            <section class="col-lg-5">
                <div class="card mb-3">
                    <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/d7_images/cover_media/ray-169hero-podcasts-shutterstock.jpg" class="card-img-top" alt="sample image">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-8 ">
                                <p>{{ $student->roll }}</p>
                                <div>
                                    <h3 class="text-capitalize" style="display: inline-block;">{{ $student->firstname }} {{ $student->lastname }}</h3> <span style="font-size: 1.5rem;">({{ $student->age }})</span>
                                </div>
                                <h5 class="text-capitalize">{{ $student->speciality }}</h5>
                            </div>
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img class="figure-img border float-center rounded " src="https://img.icons8.com/officel/100/000000/person-male.png" />
                                    <figcaption class="figure-caption text-capitalize">
                                        <p style="text-align: center">{{ $student->firstname }} {{ $student->lastname }}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <hr>
                        <div class="container">
                            <p class="mb-0 mt-4"><i class="fas fa-phone mr-1"></i> {{ $student->phone }}</p>
                            <p class="mb-0 text-samll"><i class="far fa-envelope mr-1"></i></i> {{ $student->email }}</p>

                            <p class="mb-0 mt-3" style="display: inline-block;">
                                <i class="fas fa-book-reader mr-1"></i>
                                @if($student->department == 'cse')
                                {{"Computer Science and Engineering"}}
                                @elseif($student->department == 'eee')
                                {{"Electrical & Electronic Engineering"}}
                                @elseif($student->department == 'ece')
                                {{"Electronics and Communication Engineering"}}
                                @elseif($student->department == 'ce')
                                {{"Civil Engineering"}}
                                @elseif($student->department == 'me')
                                {{"Mechanial Engineering"}}
                                {{"Civil Engineering"}}
                                @elseif($student->department == 'urp')
                                {{"Mechanial Engineering"}}
                                {{"Urban and  Engineering"}}
                                @elseif($student->department == 'te')
                                {{"Textile Engineering"}}
                                @elseif($student->department == 'bme')
                                {{"Biomedical Engineering"}}
                                @elseif($student->department == 'mse')
                                {{"Materials Science and Engineering"}}
                                @endif
                                <p style="display: inline-block; margin-left: 15px; font-size: 16px;"><i>( CGPA: {{ $student->cgpa }} )</i></p>
                            </p>
                            <div class="row">
                                <div class="col-8">
                                    <p class="mb-0 text-capitalize"><i class="fas fa-map-marker-alt mr-1"></i>{{ $student->address }}</p>
                                </div>
                                <div class="col-4">
                                    <form action="{{ url('/edit/' . $student->id) }}" method="get" class="d-inline-block float-right">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End Show -->

        <!-- Edit -->
        @elseif($layout == 'edit')
        <div class="row">
            <section class="col-lg-7">
                @include("studentslist")
            </section>
            <section class="col-lg-5">

                <div class="card mb-3">
                    <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/d7_images/cover_media/ray-169hero-podcasts-shutterstock.jpg" class="card-img-top" alt="sample image">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of the student</h5>

                        <form action="{{ url('/update/' . $student->id) }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Roll</label>
                                        <input value="{{ $student->roll }}" name="roll" type="text" class="form-control" placeholder="Enter roll">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputState">Department</label>
                                        <select name="department" id="inputState" class="form-control">
                                            <option selected>Choose Department...</option>
                                            <option value="cse" @if($student->department == 'cse') selected='selected' @endif >CSE</option>
                                            <option value="eee" @if($student->department == 'eee') selected='selected' @endif>EEE</option>
                                            <option value="me" @if($student->department == 'me') selected='selected' @endif>ME</option>
                                            <option value="ce" @if($student->department == 'ce') selected='selected' @endif>CE</option>
                                            <option value="ece" @if($student->department == 'ece') selected='selected' @endif>ECE</option>
                                            <option value="urp" @if($student->department == 'urp') selected='selected' @endif>URP</option>
                                            <option value="te" @if($student->department == 'te') selected='selected' @endif>TE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input value="{{ $student->firstname }}" name="firstname" type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input value="{{ $student->lastname }}" name="lastname" type="text" class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>CGPA</label>
                                        <input value="{{ $student->cgpa }}" name="cgpa" type="text" class="form-control" placeholder="Enter cgpa">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter age">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input value="{{ $student->phone }}" name="phone" type="text" class="form-control" placeholder="Enter phone 01912345678">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input value="{{ $student->email }}" name="email" type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input value="{{ $student->address }}" name="address" type="text" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                            </div>

                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>
            </section>
        </div>
        @endif
        <!-- End Edit -->

        <!-- Footer -->
        <footer class="page-footer font-small text-white bg-danger">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="http://www.kuet.ac.bd/" class="text-warning"> KUET</a>
            </div>
            <!-- End Copyright -->

        </footer>
        <!-- End Footer -->

    </div <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>