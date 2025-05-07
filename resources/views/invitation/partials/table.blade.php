


<section>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Invitations</h2>

            <table class="min-w-full border border-gray-200 text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">#</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Qty</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Link</th>
                        <th class="px-4 py-2 border">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($invitations as $index => $invitation)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $invitation->name }}</td>
                            <td class="px-4 py-2 border">{{ $invitation->people }}</td>
                            <td class="px-4 py-2 border">
                                <span class="px-2 py-1 rounded text-white {{ $invitation->status === 'accepted' ? 'bg-green-500' : 'bg-yellow-500' }}">
                                    {{ ucfirst($invitation->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-2 border">
                                <a href="{{ ENV('APP_URL').'invite/'.$invitation->slug }}" target="_blank">{{ ENV('APP_URL').'invite/'.$invitation->slug }}</a>
                            </td>
                            <td class="px-4 py-2 border">{{ date_format(new DateTime($invitation->event_date), 'd M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-4 text-center text-gray-500">No invitations found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
