<div id="fh5co-menus" data-section="menu">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Cardápio</h2>
                <p class="sub-heading to-animate">Pellentesque euismod efficitur nunc sed aliquam. Sed non tincidunt
                    nisl.
                    Vivamus imperdiet vulputate neque id pulvinar.</p>
            </div>
        </div>
        <div class="row row-padded">
            @forelse($cardapios as $cardapio)
                <div class="col-md-6">
                    <div class="fh5co-food-menu to-animate-2">
                        <h2>{{ $cardapio['nome'] }}</h2>
                        <ul>
                            @forelse($cardapio['lista'] as $item)
                                <li>
                                    <div class="fh5co-food-desc">
                                        <figure>
                                            <img src="{{ $item['image'] }}" class="img-responsive" alt="">
                                        </figure>
                                        <div>
                                            <h3>{{ $item['nome'] }}</h3>
                                            <p>{{ $item['descricao'] }}</p>
                                        </div>
                                    </div>
                                    <div class="fh5co-food-pricing">
                                        {{ number_format($item['preco'], 2, '.', ' ') }}
                                    </div>
                                </li>
                            @empty

                            @endforelse
                        </ul>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center to-animate-2">
                <p><a href="#" class="btn btn-primary btn-outline">Menu</a></p>
            </div>
        </div>
    </div>
</div>
