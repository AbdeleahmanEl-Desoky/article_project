<div class="container overflow-hidden">
    <div class="row ">
        <div class="col-12 col-lg-12p-2 m-auto text-center  one_title  p-3">

            <div class="container">
                <div class="row justify-content-center ">
                    @foreach ($articles as $article)
                    <div class="col-md-2 col-sm-4 img_item">
                        <div class="pb-4">
                            <a class="link_image" href="{{ route('article',[$article->title_en,$article->id]) }}"><img class="img_header"
                                    src="{{$article->image_button}}"
                                    alt="zzz"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>
