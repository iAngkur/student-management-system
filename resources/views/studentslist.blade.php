<div class="card mb-3">
  <img src="https://www.insidehighered.com/sites/default/server_files/media/iStock-1154631974.jpg" class="card-img-top" alt="sample image">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the informations about students of KUET </p>
    
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Roll</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->roll }}</td>
                    <td class="text-capitalize">{{ $student->firstname }} {{ $student->lastname }}</td>
                    <td class="text-uppercase">{{ $student->department }}</td>
                    <td class="text-capitalize">{{ $student->speciality }}</td>
                    <td>
                        <form action="{{ url('/show/' . $student->id) }}" method="get" class="d-md-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-info">View</button>
                        </form>
                        
                        <form action="{{ url('/edit/' . $student->id) }}" method="get" class="d-md-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                        </form>

                        <form action="{{ url('/delete/' . $student->id)}}" method="post" class="d-md-inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">X</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
