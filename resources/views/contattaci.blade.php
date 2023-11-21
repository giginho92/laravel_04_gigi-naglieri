<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 complain d-flex flex-column justify-content-center">
                <h3 class="text-center text-white display-3">Ciao! Dicci come possiamo aiutarti</h3>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form method="POST" action="{{route('contattaci_submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci la tua Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nomeUtente" class="form-label">Inserisci il tuo nome</label>
                        <input name="nome" type="text" class="form-control" id="nomeUtente" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea name="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Scrivi qui</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
        
    </div>
</x-layout>