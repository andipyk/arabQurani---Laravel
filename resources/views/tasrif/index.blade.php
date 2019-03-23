<a href="{{ route('tasrif.create') }}"><button>Create -></button></a> <br><br>

<table>
    @foreach ($tasrifs as $tasrif)
    <tr>
        <td>
            {{ $tasrif['madi'] }}
        </td>
        <td>
                [TODO: EDIT]
            </td>
    </tr>
    @endforeach
</table>