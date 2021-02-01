<section id="explore">
    <div class="container">
        <div class="row">
            <div class="watch">
                {{--<img class="img-responsive" src="/templates/2016/images/watch.png" alt="">--}}
            </div>

            <div class="col-xs-12">
                <h2>Cronograma</h2>
                <ul id="timeline" class="timeline">

                    <li v-for="(index, item) in timeline" :class="{ 'timeline-inverted': index % 2 }">
                        <div class="timeline-badge info"><i class=""></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">@{{ item.title }}</h4>
                                <p>@{{ item.period }}</p>

                                @include('2016.partials.timeline-countdown')
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-end"><i class=""></i></div>
                    </li>
                </ul>
            </div>
            <!--<div class="col-sm-7 col-md-4">

            </div>-->
        </div>
        {{--<div class="cart">--}}
        {{--<a href="#"><i class="fa fa-sign-in"></i> <span>Faça sua inscrição</span></a>--}}
        {{--</div>--}}
    </div>
</section><!--/#explore-->
