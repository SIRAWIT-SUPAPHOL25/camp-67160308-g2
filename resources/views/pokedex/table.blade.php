<table class="table table-bordered mt-4">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Species</th>
        <th>HP</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach ($pokedexs as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->type }}</td>
        <td>{{ $p->species }}</td>
        <td>{{ $p->hp }}</td>
        <td>
            <img src="{{ $p->image_url }}" width="80">
        </td>
        <td>
            <a href="/pokedex/{{ $p->id }}/edit" class="btn btn-warning btn-sm">แก้ไข</a>
            <a href="/pokedex/{{ $p->id }}/delete" class="btn btn-danger btn-sm"
               onclick="return confirm('ลบข้อมูล?')">ลบ</a>
        </td>
    </tr>
    @endforeach
</table>
