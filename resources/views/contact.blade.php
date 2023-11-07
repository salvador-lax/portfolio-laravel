<x-layout>
    @if (Session::has('sent'))
        <p>{{ Session::get('sent') }}</p>
    @endif

    <form method="POST" action="{{ route('contactRequest') }}" class="flex flex-col gap-4 child:grid">
        @csrf

        <label>
            Email:
            @error('email')
                <span class="alert alert-danger">El email no es valido</span>
            @enderror
            <input name="email" type="email" value="{{ old('email') }}" class="rounded-sm text-black">
        </label>

        <label>
            Teléfono:
            @error('phone')
                <span class="alert alert-danger">El teléfono no es valido</span>
            @enderror
            <input name="phone" type="tel" value="{{ old('phone') }}" class="rounded-sm text-black">
        </label>

        <label>
            Indica un mensaje (opcional):
            <textarea name="message" maxlength="1000" class="rounded-sm text-black">
                {{ old('message') }}
            </textarea>
        </label>

        <button type="submit" class="bg-white hover:bg-slate-100  text-black w-fit p-1 mx-auto rounded">
            Enviar
        </button>
    </form>
</x-layout>
