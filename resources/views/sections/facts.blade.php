<div class="section fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        @foreach ($facts as $fact)
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="{{ $fact->number }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">{{ $fact->title }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-3 col-md-6">
                            <div class="counter">

                                <h2 class="timer count-title count-number"
                                @foreach ($users as $user)
                                data-to="{{ $loop->count }}"
                                @endforeach
                                    data-speed="1000"></h2>

                                <p class="count-text ">Ro'yxatdan o'tganlar</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
