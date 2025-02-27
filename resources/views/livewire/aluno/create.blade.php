<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif




    <div style="width: 50%; margin-left: 25%; margin-bottom: 25px" class="card">
        <h5 style="text-align: center" class="card-header">Cadastro de Aluno</h5>

        <div class="card-body">

            <form wire:submit.prevent="store">



                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="email" name="email" placeholder="Ex.: luiz.batman@gmail.com"
                        wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">cpf</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="cpf" name="cpf" placeholder="Ex.: 478.092.987-52"
                        wire:model.defer="cpf">
                </div>


                <div class="mb-3">
                    <label for="rm" class="form-label">Rm</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="rm" name="rm" placeholder="Ex.: 47.980.872-62"
                        wire:model.defer="rm">
                </div>

                <div class="mb-3">
                    <label for="codigo_da_escola" class="form-label">Codigo da Escola</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="codigo_da_escola" name="codigo_da_escola" placeholder="Ex.: 268"
                        wire:model.defer="codigo_da_escola">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">senha</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="senha" name="senha" placeholder="Ex.: batman123"
                        wire:model.defer="senha">
                </div>





                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Criar Conta</button>
                </div>




            </form>

        </div>


    </div>





</div>
