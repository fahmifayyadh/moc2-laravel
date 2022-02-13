<!-- Modal Add Course -->
<div class="modal fade" id="adc{{$ce->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Course</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form id="adcc{{$ce->id}}" action="{{route('course.coursePaket',$ce->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Add Course</label>
                        <select name="course" class="form-control" id="">
                        @foreach ($course as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>   
                            
                        @endforeach
                        </select>
                        @error('is_member')
                <small>{{$message}}</small>
                @enderror
                        </div>
                    </form>
                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    <tbody>

                        @foreach ($ce->course as $i=>$b)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$b->name}}</td>
                            <td>{{$b->desc}}</td>
                            <td>
                                <form style="display: inline" onsubmit="return confirm('apakah anda yakin?')" action="{{route('course.addCourseDelete',$ce->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="number" hidden name="courseId" value="{{$b->id}}">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer ">
            <button onclick="document.getElementById('adcc{{$ce->id}}').submit()" type="button" class="btn btn-7" style="background: #FF9F1C; border-radius: 7px; font-weight: bold; color: black;">Add</button>
            <button type="button" class="btn btn-8" data-dismiss="modal" style="background: #283246; border-radius: 7px; font-weight: bold; color: #FF9F1C;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add Course -->