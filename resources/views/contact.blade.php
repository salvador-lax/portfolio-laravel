<x-layout>
    @isset ($sent)
        <p>Su peticion de contacto ha sido enviada con exito.</p>
    @endisset
    <form method="POST" action="{{ route('contactRequest') }}" class="flex flex-col gap-4 child:contents">
        @csrf

        <label>
            Email:
            @error('email')
                <span class="alert alert-danger">El email no es valido</span>
            @enderror
            <input name="email" type="email" value="{{ old('email') }}">
        </label>

        <label>
            Teléfono:
            @error('phone')
                <span class="alert alert-danger">El teléfono no es valido</span>
            @enderror
            <input name="phone" type="tel" value="{{ old('phone') }}">
        </label>

        <label>
            Indica un mensaje (opcional):
            <textarea name="message" maxlength="1000">
                {{ old('message') }}
            </textarea>
        </label>

        <button type="submit">
            Enviar
        </button>
    </form>
</x-layout>
