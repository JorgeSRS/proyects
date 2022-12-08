


<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>foto</th>
            <th>marca</th>
            <th>modelo</th>
            <th>daño</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($autos as $auto)
        <tr>
            <td>
            <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" 
            src="images/{{$auto->foto}}""> 
            </td>
            <td>{{$auto->marca}}</td>
            <td>{{$auto->modelo}}</td>
            <td>{{$auto->daño}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

