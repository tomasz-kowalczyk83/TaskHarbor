<form method="POST" action="/shelves">
    @csrf


    <input
        id="name"
        name="name"
        type="text"
        class="@error('name') is-invalid @enderror"
    />

    <input type="submit">
</form>
