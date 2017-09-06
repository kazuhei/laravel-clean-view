<table class="table table-striped">
    <tbody>
    @foreach($displayHash as $item)
        <tr>
            <th>{{ $item->key() }}</th>
            <td>{{ $item->value() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
