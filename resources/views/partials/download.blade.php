<!-- callout -->
<section class="callout" id="download">
    <div class="container-fluid text-vertical text-center">
        <div class="col-sm-10 col-sm-offset-1 wow fadeInDownBig">
            <h1 class="heading">Download</h1>
            <p>Você pode precisar desses documentos</p>
            <div class="row">
                <a
                    href="{{ route('download', ['regimento-interno.pdf']) }}"
                    class="btn border-button">
                    REGIMENTO INTERNO <i class="fa fa-cloud-download"></i>
                </a>
            </div>

            <div class="row">
                <a
                    href="{{ route('download', ['anexo-ii-calendario-de-atividades-9a-edicao.pdf']) }}"
                    class="btn border-button">
                    ANEXO II – CALENDÁRIO DE ATIVIDADES <i class="fa fa-cloud-download"></i>
                </a>
            </div>

            <div class="row">
                <a
                    href="{{ route('download', ['documentos-necessarios-para-participar-parlamento-juvenil.zip']) }}"
                    class="btn border-button">
                    DOCUMENTOS NECESSÁRIOS PARA PARTICIPAR <i class="fa fa-cloud-download"></i>
                </a>
            </div>

            {{--<div class="row">--}}
                {{--<a--}}
                    {{--href="{{ route('download', ['manual-do-parlamentar.pdf']) }}"--}}
                    {{--class="btn border-button">MANUAL DO PARLAMENTAR <i class="fa fa-cloud-download"></i>--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
