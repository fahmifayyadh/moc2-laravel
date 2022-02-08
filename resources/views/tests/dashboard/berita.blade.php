<div class="accordion" id="accordionExample" >
    @foreach ($berita as $i => $b)
    <div class="card" style="background-color: #fff">
        <div data-toggle="collapse"
        data-target="#collapse{{$i+1}}" class="card-header" id="heading{{$i+1}}" style="background-color: #fff;padding: 0">
            <h2 class="mb-0">
                <button style="color:black" class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse{{$i+1}}">
                    Berita {{$i+1}}: {{$b->judul}}
                </button>
            </h2>
        </div>

        <div id="collapse{{$i+1}}" class="collapse" aria-labelledby="heading{{$i+1}}" data-parent="#accordionExample"style="background-color: #fff;padding: 0">
            <div style="padding: 10px" class="card-body">
                <div id="berr">
                    {!!$b->isi!!}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
