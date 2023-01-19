<table id="dtpenerbitan" class="table table-bordered table-striped">
<thead>
  <tr>
    <th>Tahap Pencapaian</th>
    <th>Markah</th>
    <th>Jawatan</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  {{-- @foreach($data as $d )
    @foreach($jawatan as $jawatan)
      @if ($jawatan == $name)
        <tr>
          <td>{{$d->pencapaian}}</td>
          <td>{{$d->markah}}</td>
          <td>{{$d->jawatan}}</td>
          <td>
            <form action="{{ route('penerbitan.destroy',$d->penerbitandtid) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
              @csrf
              @method('delete')
              <a href="{{ route('penerbitan.edit',$d->penerbitandtid) }}" class="btn btn-sm btn-warning">Edit</a>
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endif
    @endforeach
  @endforeach  --}}
      


  @foreach($data as $d )
    {{-- @foreach ( == $name) --}}
    @if ($d->jawatan === $name)
    <tr>
      <td>{{$d->pencapaian}}</td>
      <td>{{$d->markah}}</td>
      <td>{{$d->jawatan}}</td>
      <td>
        <form action="{{ route('penerbitan.destroy',$d->penerbitandtid) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
          @csrf
          @method('delete')
          <a href="{{ route('penerbitan.edit',$d->penerbitandtid) }}" class="btn btn-sm btn-warning">Edit</a>
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr> 
    @endif
      {{-- @endforeach --}}
@endforeach 
  
  
 
</tbody>
</table>

