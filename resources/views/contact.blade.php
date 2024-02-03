<x-layout>
    @if (Session::has('sent'))
        <p class="mb-4 font-bold text-lg">Your contact request has been send succesfully</p>
    @endif

    <form method="POST" action="{{ route('contactRequest') }}" class="flex flex-col gap-4 child:grid">
        @csrf

        <label>
            Email:
            @error('email')
                <span class="alert alert-danger">Email is not valid</span>
            @enderror
            <input name="email" type="email" value="{{ old('email') }}" class="rounded-sm text-black">
        </label>

        <label>
            Phone:
            @error('phone')
                <span class="alert alert-danger">Phone is not valid</span>
            @enderror
            <input name="phone" type="tel" value="{{ old('phone') }}" class="rounded-sm text-black">
        </label>

        <label>
            Send message (optional):
            <textarea name="message" maxlength="1000" class="rounded-sm text-black">{{ old('message') }}</textarea>
        </label>

        <button type="submit" class="bg-white hover:bg-slate-100 text-black w-fit p-1 mx-auto rounded font-bold">
            Send
        </button>
    </form>
</x-layout>
