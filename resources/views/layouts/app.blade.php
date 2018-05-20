<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Title error') }}</title>

    @include('inc.embedding')
</head>
<body>
    <div id="app">
{{--        @includeFirst(['layouts.header', 'errors.no-file'], ['fileName'=>' \'header\''])--}}
        {{--<preloader-component></preloader-component>--}}
        {{--@includeFirst(['inc.sidebar', 'errors.no-file'], ['fileName'=>' \'sidebar\''])--}}
        {{--<yeees-component></yeees-component>--}}
        <main class="py-4">
            @yield('content', 'Yield \'content\' error')
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda enim eveniet tenetur. Alias
                 aspernatur consequuntur culpa dolores eius eveniet expedita inventore, molestiae nostrum nulla quia
                 quisquam quos repellendus, temporibus tenetur?
            </div>
            <div>Animi assumenda delectus dicta dolor et fugiat nihil nisi quidem sapiente vero. Alias aliquam
                 cupiditate ducimus eius placeat quia rem? Autem fuga illum odio omnis quae ullam unde veniam
                 voluptatum!
            </div>
            <div>Consectetur eos laboriosam nemo provident quia quos voluptas? Aperiam libero maiores modi sunt tempora!
                 Ab alias aspernatur blanditiis, culpa deserunt error expedita harum sequi voluptatem! Cum cumque eos
                 ipsam mollitia.
            </div>
            <div>Aspernatur deserunt doloribus ducimus hic id ipsam maiores maxime molestiae neque possimus provident,
                 quod recusandae rem rerum sequi sint voluptas. Ad animi autem culpa harum iure, odit repudiandae sed
                 voluptate!
            </div>
            <div>Accusantium aut consequatur cumque cupiditate deleniti dignissimos dolorum, fuga illo inventore magni
                 odit perferendis porro quo reiciendis sint sunt tempore ullam voluptate. Ad aspernatur doloribus fugit
                 laboriosam nesciunt quas vero.
            </div>
            <div>Ad aliquid, animi at aut commodi consequatur culpa, cupiditate deserunt id ipsam, maxime natus
                 necessitatibus nobis omnis pariatur quasi quia quis quos ratione recusandae repellat repellendus
                 repudiandae tenetur veniam vitae?
            </div>
            <div>Ab, ad animi aut commodi cum cupiditate ducimus eius error esse eveniet excepturi hic impedit incidunt
                 inventore maxime mollitia nobis quaerat quasi qui quisquam similique soluta tenetur unde veritatis
                 vero?
            </div>
            <div>Delectus explicabo magnam magni maxime minima modi nihil nobis nulla, odio officia, provident quos
                 temporibus ullam. Accusantium aliquam cum dolor, doloribus fugiat incidunt laudantium quasi quisquam
                 recusandae saepe sequi veritatis?
            </div>
            <div>Alias corporis, dicta enim esse est expedita harum laboriosam magni nam nemo nisi perferendis
                 perspiciatis, quae quaerat qui quibusdam quis quod sit temporibus ut. Alias doloribus eius et fugit
                 optio?
            </div>
            <div>Adipisci amet animi asperiores assumenda consequuntur dolore, dolorum molestiae neque odit quisquam
                 quod, repellat ullam? Aut blanditiis cum et excepturi exercitationem facilis laudantium perspiciatis
                 quaerat qui quia? Dolor natus, quae.
            </div>
            <div>Accusamus blanditiis consectetur corporis debitis delectus deserunt dolorem doloremque est iste
                 laboriosam laborum maiores nemo nobis odio perspiciatis, quas qui quis sed, sit sunt suscipit tenetur
                 ullam unde voluptates voluptatibus?
            </div>
            <div>Amet dicta dolore ducimus ea eligendi, est facere libero, nisi porro possimus praesentium quibusdam
                 recusandae unde vitae voluptates. Cum cupiditate facilis iste magni placeat ratione voluptatem. Aliquid
                 exercitationem recusandae tenetur.
            </div>
            <div>Accusantium aliquid atque blanditiis deserunt eaque est illo incidunt nostrum numquam, possimus, quam,
                 sequi sit ullam voluptatem voluptatibus! Corporis deleniti, eos libero maxime nihil nostrum odio
                 officiis quisquam suscipit voluptatem.
            </div>
            <div>Aliquam aperiam atque culpa cum dolore dolorem, earum ex incidunt inventore labore minus mollitia odio
                 odit officiis porro quae, quibusdam repellat sequi tempora totam ullam voluptas voluptates! Aliquid
                 explicabo, libero.
            </div>
            <div>Eius ex inventore maxime natus obcaecati optio perspiciatis quia saepe, veritatis. Atque ea explicabo
                 harum molestias placeat, quo tempora voluptate! Ab aliquam amet debitis in magnam repudiandae rerum
                 sunt veniam!
            </div>
            <div>Aspernatur delectus earum eum inventore mollitia odit voluptates. Accusamus, aliquam animi beatae culpa
                 cum et libero magni nesciunt odit omnis optio praesentium quos ratione reprehenderit repudiandae
                 temporibus vitae. Sunt, totam.
            </div>
            <div>A accusantium ad alias at, consequuntur corporis, debitis dicta dolor eius eos eum id illum iste
                 laudantium minima minus necessitatibus nemo nostrum obcaecati omnis quae quibusdam quidem quis quo
                 voluptas!
            </div>
            <div>Consectetur dignissimos eveniet qui rerum? Assumenda consectetur consequatur delectus deserunt, ea
                 eaque in ipsum nisi non quasi qui sapiente unde. Eligendi fugit quidem sint veritatis? Deleniti
                 eligendi possimus quod reprehenderit.
            </div>
            <div>Ab, accusantium beatae delectus doloribus eos ex fugit in ipsa laudantium maxime minus mollitia nam
                 optio perspiciatis possimus praesentium quae quas ratione repellat repellendus repudiandae rerum
                 sapiente sit vitae voluptatem.
            </div>
            <div>Aperiam blanditiis consequatur culpa cupiditate ducimus eligendi et exercitationem facere impedit,
                 ipsam itaque iure, laudantium magnam nisi non nostrum obcaecati odit, quidem quod repellat suscipit ut
                 voluptatum. Aliquid, laudantium, tempore!
            </div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum esse iusto quae sunt. Ad aperiam
                 aspernatur culpa doloribus, eveniet illum ipsam molestiae, nostrum porro praesentium provident quas
                 quia soluta temporibus.
            </div>
            <div id='qweqwe'>Ab adipisci delectus dolore doloribus earum expedita, explicabo facere harum illo ipsum necessitatibus
                 nemo nisi non officiis optio praesentium quae quasi tempore totam, vero. Fuga fugit quaerat soluta.
                 Illo, quaerat.
            </div>
            <div>Ad architecto aspernatur, debitis eius esse excepturi hic impedit incidunt minus molestiae molestias
                 mollitia nam nisi obcaecati officia placeat porro provident quasi repellat rerum sequi sit sunt ut
                 voluptate voluptatem.
            </div>
            <div>Cum delectus enim error iure nulla quisquam repudiandae rerum unde velit voluptate? Debitis dicta earum
                 illum ipsam nihil provident sit tempore totam. Aliquam consequuntur ipsum iste pariatur qui similique
                 sit!
            </div>
            <div>Accusantium amet deserunt eius inventore magnam nobis quia, sit voluptatibus! Adipisci, aliquid autem
                 deserunt dignissimos distinctio enim harum ipsa ipsam maiores molestiae molestias mollitia numquam qui
                 quo veritatis? Adipisci, sed!
            </div>
            <div>A ab animi architecto atque aut, autem consectetur corporis cumque deleniti exercitationem fuga illum
                 impedit in iure, laborum modi molestiae optio perferendis, quia repellendus vitae voluptas voluptatum?
                 Maiores possimus, saepe.
            </div>
            <div>Ab debitis illum inventore minima totam! Accusantium alias amet aperiam consectetur eaque fugiat
                 numquam officia perferendis voluptatibus! Aut consequuntur eveniet quae. Cupiditate eius explicabo
                 incidunt natus nesciunt sit soluta, vel.
            </div>
            <div>A commodi, corporis delectus earum explicabo inventore minus odit quam quo ut. Esse ex magni odio
                 perspiciatis praesentium quis sapiente sit suscipit. A dicta esse magni qui voluptatibus! Molestias,
                 quisquam.
            </div>
            <div>Accusamus ad adipisci aspernatur autem consequatur cumque debitis distinctio explicabo itaque iusto
                 libero nam natus odit pariatur quaerat quas quasi quidem recusandae, repudiandae saepe sapiente sequi
                 similique sunt voluptas voluptates.
            </div>
            <div>Minima, sed voluptatum. Consectetur maxime possimus quae quibusdam. At blanditiis ducimus nam
                 reprehenderit. Consectetur corporis delectus dolor doloribus exercitationem facilis fugit, illum natus
                 odio porro quam qui quod saepe voluptas.
            </div>
            <div>Alias amet dolorem obcaecati officiis pariatur placeat saepe ullam. Amet asperiores at beatae
                 consectetur est et inventore iste itaque, minima nam nemo perspiciatis sapiente, tempora? Architecto
                 beatae harum molestiae quam.
            </div>
            <div>Beatae cupiditate exercitationem fugiat maiores molestias necessitatibus, veritatis voluptatum! At
                 atque, culpa debitis delectus dolores doloribus earum facilis non officiis quaerat quam quibusdam quis
                 recusandae saepe, soluta sunt vel voluptatibus.
            </div>
            <div>Alias facere optio quis quos repellat sit soluta voluptate voluptates? Dolorem enim, eum eveniet facere
                 facilis fuga harum molestiae necessitatibus nobis odio quaerat quisquam, reiciendis repellendus
                 repudiandae ullam unde veniam.
            </div>
            <div>Ad aperiam beatae consequatur debitis eos laborum magnam, nostrum odio odit officiis quae quibusdam sed
                 tempora vitae, voluptates. Animi consectetur hic laudantium nemo nobis! Aut dolore modi natus rem
                 soluta?
            </div>
            <div id="element3">Cumque eveniet iusto laudantium, magni molestias provident quasi suscipit. Ad culpa
                               cupiditate dolore,
                               doloremque eveniet illum nesciunt officia provident, qui quia quibusdam tempore
                               temporibus. Amet
                               consequuntur ipsam placeat quia veritatis?
            </div>
            {{-- BELLOW REMOVE--}}
            @include('pages.test')
            {{--@yield('card')--}}
            {{--@yield('buttons')--}}
            {{--@yield('text-color')--}}
            {{--@yield('text-extended')--}}
            {{--@yield('flex')--}}
            {{--@yield('blocks')--}}
            {{--@yield('new')--}}
            {{--@yield('testing')--}}
        </main>

        <climb-component></climb-component>

        @includeFirst(['layouts.footer', 'errors.no-file'], ['fileName'=>' \'footer\''])
    </div>
</body>
</html>
