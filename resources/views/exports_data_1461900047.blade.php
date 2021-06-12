<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Siswa</th>
            <th scope="col">Guru</th>
            <th scope="col">Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->siswa }}</td>
                <td>{{ $item->guru }}</td>
                <td>{{ $item->pelajaran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>