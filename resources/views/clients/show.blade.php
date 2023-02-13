<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="w-full overflow-hidden md:rounded-lg">
                    <div>{{ $client->user->name  }}</div>
                    <div>{{ $client->user->email  }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>