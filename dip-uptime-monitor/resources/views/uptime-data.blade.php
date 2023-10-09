<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Uptime Data
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Display the uptime data here -->
            <table class="table-auto">
                <thead>
                <tr>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Sinds</th>
                </tr>
                </thead>
                <tbody>
                @foreach($monitors as $monitor)
                    <tr>
                        <td>{{ $monitor->url }}</td>
                        <td>{{ $monitor->uptime_status }}</td>
                        <td>{{ \Carbon\Carbon::parse($monitor->uptime_status_last_change_date)->diffForHumans() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
