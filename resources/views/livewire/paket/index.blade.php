<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Nama Paket</th>
                <th class="px-4 py-2">Pagu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapaket as $paket)
            <tr>
                <td class="border px-4 py-2">{{ $paket->nmpaket }}</td>
                <td class="border px-4 py-2">{{ $paket->pagurmp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>