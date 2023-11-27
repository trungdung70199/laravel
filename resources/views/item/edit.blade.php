<x-app-layout>
    <h2>Item</h2>
    <div>
        <form action="{{ route('item.update', $item->id) }}" method="post">
            @csrf

            <div>
                <label>商品名</label>
                <input type="text" name="name" value="{{ $item->name }}">
            </div>
            <div>
                <label>価格</label>
                <input type="text" name="price" value="{{ $item->price }}">
            </div>
            <button>保存</button>
        </form>
    </div>
</x-app-layout>