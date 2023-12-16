<div>
    @if ($message)
        <div class="border border-green-600 bg-green-100 text-green-600 font-bold p-4">
            {{ $message }}
        </div>
    @endif
</div>

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('show-notification', function () {
            setTimeout(function () {
                Livewire.emit('notify', '');
            }, 5000);
        });
    });
</script>

