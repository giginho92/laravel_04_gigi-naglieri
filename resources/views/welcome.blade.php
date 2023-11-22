<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 header d-flex flex-column justify-content-center">
                <h1 class="display 2 text-center">No limits</h1>
            </div>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
    
</x-layout>