<x-app-layout>
    <h2>Item List</h2>

    <a href="{{ route('item.create') }}">New</a>
    <table>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">
                    {{ __('Name') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Price') }}
                </th>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        <a href="{{ route('item.show', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->price }}円
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app-layout>