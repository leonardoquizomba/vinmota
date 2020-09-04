<div id="fh5co-featured" data-section="features">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Pratos em destaque</h2>
                <p class="sub-heading to-animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi accumsan risus et vehicula varius. Nam vel quam in magna tincidunt euismod. </p>
            </div>
        </div>
        <div class="row">
            <div class="fh5co-grid">
                @forelse($destaques as $destaque)
                    <div class="fh5co-v-half">
                        @forelse($destaque as $prato)
                            <div class="fh5co-h-row-2 {{ $prato['class'] }} to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                     style="background-image: url({{ $prato['img'] }})"></div>
                                <div class="fh5co-v-col-2 fh5co-text {{ $prato['posicao'] }}">
                                    <h2>{{ $prato['nome'] }}</h2>
                                    <span class="pricing">{{ $prato['preco'] }}</span>
                                    <p>{{ $prato['descricao'] }}</p>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</div>
