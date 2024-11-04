<x-guestLayout>
    <form action="/categories/store" method="POST">
        @csrf
        Nome: <input type="text" name="name"><br>
        Slug: <input type="text" name="slug"><br>
        Description: <textarea name="description"></textarea><br>
        <x-button>Criar</x-button>
    </form>

</x-guestLayout>