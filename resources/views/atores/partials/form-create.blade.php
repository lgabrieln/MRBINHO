 <form method="post" action="/atores">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>

                     <div class="form-group">
                        <label for="ano">Ano</label>
                        <input class="form-control" type="text" name="ano" id="ano" placeholder="Ano">
                    </div>

                    <div class="form-group">
                        <label for="filme_id">Filmes</label>
                       <div class="dropdown">
  
                            @foreach($filmes as $filme)
                                  <input type="checkbox" name="filmes[]" value="{{$filme->id}}">{{$filme->titulo}}</input><br>
                            @endforeach

                    </div>

                    <br/>
                    <button class="btn btn-primary">Enviar</button>
                    <a href="/atores" class="btn btn-default">Voltar</a>
                </form>    
