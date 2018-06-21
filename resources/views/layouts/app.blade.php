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
    @includeFirst(['layouts.header', 'errors.parts.no-file'], ['fileName'=>' \'header\''])
    @includeFirst(['inc.preloader', 'errors.parts.no-file'], ['fileName'=>' \'preloader\''])

    <div id="app">
        <div id="apex"></div>

        {{--@includeFirst(['inc.sidebar', 'errors.parts.no-file'], ['fileName'=>' \'sidebar\''])--}}
        <main class="py-4">
            @yield('content', 'Yield \'content\' error')

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

        <div class='p-4'>
            Первая история – про соединение точек

            Я бросил учебу в Reed college через полгода с момента поступления, но продолжал ходить на лекции и жить в студгородке еще 18 месяцев, пока не забросил это дело окончательно. Так почему я бросил учебу?

            Эта история началась до моего рождения. Моя биологическая мать, молодая незамужняя аспирантка, решила отдать меня на усыновление. Ей очень хотелось, чтобы меня усыновили люди с высшим образованием. И все было готово для того, чтобы меня взяли на воспитание в семью некоего юриста. Но к моменту моего рождения юрист и его жена вдруг решили, что на самом деле им нужна девочка, а не мальчик. Так что моим будущим родителям, которые были следующими в очереди, позвонили среди ночи с вопросом: «У нас есть внеплановый ребенок. Мальчик. Возьмете его?» И они ответили «Конечно». Позже моя биологическая мать узнала, что моя реальная мать не заканчивала никакого колледжа, и что мой отец не закончил даже средней школы. Она отказалась подписать окончательные бумаги на усыновление. Лишь несколько месяцев спустя моим родителям удалось ее уговорить. Они пообещали, что обязательно отдадут меня в колледж. Так началась моя жизнь.

            17 лет спустя я пошел-таки в колледж. По наивности, я выбрал очень дорогой колледж – почти как Стенфорд – и все сбережения моих небогатых родителей уходили на оплату моей учебы. Через полгода я понял, что в учебе нет никакого смысла: я понятия не имел ни чем я хочу заниматься в жизни, ни как колледж поможет мне это понять. При этом на учебу я тратил все, что мои родители скопили за всю свою жизнь. Поэтому я решил бросить учебу и надеяться на то, что все как-нибудь образуется.

            Тогда мне от этого было не по себе, но сейчас, оглядываясь назад, я понимаю, что это было одно из самых лучших решений в моей жизни. Меня отчислили. Это значило, что больше не нужно ходить на обязательные курсы – и можно ходить только на то, что кажется интересным.

            Конечно, не все было гладко. У меня не было комнаты в общежитии, и ночевать приходилось на полу в комнатах друзей. Я сдавал бутылки из-под колы по 5 центов за штуку, чтобы покупать еду. Каждое воскресенье я ходил пешком по 7 миль через весь город, чтобы раз в неделю хорошо поесть у кришнаитов. Еда там была замечательная (В оригинале "I loved it"", парафраз знаменитого слогана McDonalds).

            Многое из того, что я открыл для себя в те времена, подчиняясь своему любопытству и интуиции, впоследствии оказалось бесценным. Приведу один пример. Reed college тогда предлагал лучшее в стране образование в области каллиграфии. Любой плакат, любая надпись на любом шкафчике в любом месте студенческого городка были замечательно выведены от руки по всем законам искусства каллиграфии. Я был отчислен, мне не нужно было посещать обычные занятия, и я решил изучать каллиграфию. Я узнал многое о гарнитурах шрифтов (serif, sans-serif), о варьировании расстояния между различными сочетаниями букв – обо всем, что делает великолепную типографику великолепной. В этих занятиях была какая-то красота, история, тонкость искусства, недоступная науке… меня это завораживало.

            Тогда мне казалось, что все это не имеет ни малейшего шанса на практическое применение. Но 10 лет спустя, когда мы разрабатывали первый Макинтош, все мои знания по каллиграфии вернулись ко мне – и пригодились. Макинтош стал первым компьютером с красивыми шрифтами. Если бы я не стал посещать эти занятия в колледже, в Маках не было бы возможности использовать разные гарнитуры, шрифты не были бы пропорциональными… А поскольку Windows – это всего лишь калька Макинтоша, с большой вероятностью этого не было бы ни у одного компьютера в мире. Итак, если бы я не бросил колледж и не пошел на курсы каллиграфии, у современных компьютеров, вероятно, не было бы тех замечательных шрифтов, которые есть у них сегодня.

            Конечно, в колледже я и не предполагал, что в будущем все точки сойдутся, но десять лет спустя стало очевидно – они не могли не сойтись. И опять же, невозможно соединить точки, когда ты смотришь в будущее – их можно соединить, лишь оглядываясь на прошлое. Поэтому в настоящем нужно верить, что в будущем точки как-нибудь сойдутся. Нужно верить во что-нибудь: в Бога, Судьбу, Жизнь, Карму, что угодно. Вера в то, что по ходу движения точки сойдутся, даст вам мужества следовать своему сердцу, даже если сердце уводит вас с качественно протоптанной тропинки. В этом вся разница.


            Моя вторая история – о любви и потере

            Мне повезло. Я рано нашел свое любимое дело. Мне было 20 лет, когда мы с Возом (Стив Возняк) основали «Apple» в гараже моих родителей. Мы много работали, и за 10 лет наше «гаражное предприятие» стало компанией стоимостью 2 миллиарда долларов, со штатом более 6 тысяч человек. За год до этого мы выпустили свое лучшее творение – Макинтош, и мне только что исполнилось 30 лет. И тут меня уволили.

            Но как тебя могут уволить из компании, которую ты же и основал? Произошло следующее. Компания росла, и мы наняли одного, на мой взгляд талантливого, человека, чтобы он управлял компанией вместе со мной. Год или около того все было в порядке. Но постепенно мы разошлись в своем видении будущего, и в какой-то момент окончательно разругались. Совет Директоров в тот момент принял его сторону. И в 30 лет меня с шумом уволили. Все, чему я посвятил свою сознательную жизнь – исчезло, и я чувствовал опустошенность. Несколько месяцев я вообще не знал, что делать. Мне казалось, что я подвел предыдущее поколение предпринимателей – они передавали мне эстафетную палочку, а я ее выронил. Я встречался с Дэвидом Паккардом и Бобом Нойсом и пытался извиниться за то, что все испортил. Мой провал был настолько публичным, что я даже думал о том, чтобы сбежать из Долины.

            Но понемногу я стал приходить в себя. Я чувствовал, что по-прежнему люблю свое дело. То, как все сложилось с Apple, ничего не изменило во мне. Я был отвергнут, но по-прежнему любил. И я решил начать все сначала.

            В тот момент я, конечно же, не понимал, что увольнение из Apple – это лучшее, что могло со мной случиться. Тяжкое бремя успеха сменилось чувством легкости: я опять новичок. Менее уверенный по поводу всего происходящего. С этого чувства начался один из самых творческих периодов в моей жизни. В течение 5 последующих лет я основал компании NeXT и Pixar и влюбился в прекрасную женщину, которая стала моей женой. Студия Pixar выпустила первый в мире компьютерный мультфильм, «Историю игрушек». Сегодня она является самой успешной мультипликационной студией в мире. В силу замечательного стечения обстоятельств, компания Apple купила компанию NeXT и я, таким образом, вернулся в Apple. Технология, которую мы разработали в NeXT, легла в основу нынешнего возрождения Apple. И у нас с Лорин замечательная семья.

            Я уверен, что ничего этого не случилось бы, если бы меня не уволили из Apple. Лекарство было ужасным на вкус, но, похоже, пациент в нем нуждался. Иногда жизнь будет бить вас ключом по голове – не теряйте веры. Я убежден, что единственная вещь, благодаря которой я продолжал идти вперед – это то, что я любил свое дело. Нужно найти то, что вы любите – и это верно как для работы, так и для личной жизни. Работа будет занимать много места в вашей жизни, а потому единственный способ быть по-настоящему довольным жизнью – делать то дело, которое считаешь великим. А единственный способ сделать великое дело – любить то, что ты делаешь. Если вы еще не нашли того, что любите – продолжайте искать, не успокаивайтесь. Как и со всеми делами сердца, когда найдете - поймете, что это – то самое. И как любые настоящие отношения, эти отношения с годами будут только улучшаться. Так что ищите. Не успокаивайтесь.


            Моя третья история – о смерти

            Когда мне было 17 лет, я прочитал мысль о том, что «Если будешь проживать каждый день, как если бы он был последним – однажды наверняка окажешься прав». Это произвело на меня сильное впечатление, и с тех пор вот уже 33 года я каждое утро смотрюсь в зеркало и спрашиваю себя: «Если бы сегодня был последний день моей жизни, захотел бы я заниматься тем, чем собираюсь заняться»? И всякий раз, когда отвечаю себе «Нет» слишком много дней подряд, я понимаю, что нужно что-то менять.

            Память о том, что все мы скоро умрем, лучше всего помогает мне принимать большие решения в жизни. Ведь перед лицом смерти почти все теряет значение – мнение окружающих, амбиции, страх позора или провала – и остается только то, что по-настоящему важно. Память о том, что умрешь – это лучший известный мне способ избежать мысленной ловушки, которая заставляет тебя думать, что тебе есть, что терять. Ты уже голый. И нет никаких причин не следовать своему сердцу.

            Около года назад мне поставили диагноз – рак. В полвосьмого утра я прошел сканирование, которое отчетливо показало опухоль в поджелудочной железе. Я и понятия не имел о том, что у меня есть поджелудочная железа. Врачи сказали, что это почти наверняка неизлечимый вид рака, и что жить мне осталось от 3 до 6 месяцев.

            Мой врач посоветовал мне идти домой и привести в порядок свои дела, что на языке врачей означает: «Подготовься к смерти». Это значит собраться и сказать своим детям все то, что ты хотел им сказать. Тебе казалось, у тебя на это есть следующие десять лет, а оказалось – всего пара месяцев. Это значит подготовить все так, чтобы твоей семье было как можно проще со всем справиться. Это значит попрощаться со всеми.

            Я жил с этим диагнозом целый день. Позже вечером я прошел биопсию: эндоскоп через горло и желудок засунули мне в кишечник, ввели иглу в поджелудочную железу и взяли несколько клеток из опухоли для анализа. Я был под наркозом, но моя жена, которая при этом присутствовала, рассказала, что, когда врачи посмотрели на образцы клеток под микроскопом, они начали плакать. Оказалось, что у меня очень редкий вид рака поджелудочной железы, который лечится при помощи хирургической операции.

            Мне сделали операцию и, слава богу, я теперь в порядке.

            Это было самое близкое столкновение со смертью в моей жизни, и я надеюсь, в течение следующих 20 лет ближе сталкиваться с ней мне не придется. Пережив это, я теперь могу сказать вам гораздо увереннее, чем раньше, когда смерть была для меня полезным, но исключительно умозрительным конструктом:

            Никто не хочет умирать. Даже люди, которые хотят попасть в Рай, не хотят умирать, чтобы туда добраться. И, тем не менее, смерть – это общая для всех нас конечная остановка. Дальше никто не проедет.

            И так оно и должно быть, поскольку Смерть, видимо, - лучшее изобретение Жизни. Для Жизни она - агент изменений. Она расчищает старое, чтобы дать место Новому. Сейчас Новое – это вы, но пройдет немного времени, и вы постепенно станете тем Старым, что нужно убрать с дороги. Я прошу прощения за драматизм, но так оно и есть.

            Ваше время ограниченно, так что не тратьте его, проживая чью-то чужую жизнь. Не попадайтесь в ловушку догмы – не живите чужими мыслями. Не давайте шуму чужих мнений заглушать собственный внутренний голос. И самое главное – имейте мужество следовать своему сердцу и уму. Они каким-то образом уже знают, кем ты должен стать. Все остальное - вторично.

            Во времена моей молодости выпускался замечательный журнал, «Каталог всего на свете». Он был одной из библий моего поколения. Парень, которого звали Стюарт Бранд, издавал его неподалеку отсюда, в Менло Парк.

            Это было в конце 60х, до компьютеров и компьютерной верстки, так что делалось все вручную, при помощи печатных машинок, ножниц и поляроида. Это было что-то вроде Гугла в бумажной форме, но за 35 лет до возникновения Гугла. Издание было идеалистическим, полным замечательных инструментов и идей.

            Стюарт и его команда сделали несколько номеров журнала, и, когда тот выполнил свою миссию, решили выпустить финальный.

            Это было в середине 70х, я тогда был вашего возраста. На задней обложке журнала была фотография сельской дороги, сделанная ранним утром. Такой дороги, по которой обычно путешествуют автостопом любители приключений. Под этой фотографией были слова: «Оставайся голодным. Оставайся глупым». Они выходили из игры, и это было их прощальным посланием. Оставаться голодным. Оставаться глупым. Я всегда желал этого для себя. И теперь, когда вы выпускаетесь из университета, чтобы начать все по-новому, – я желаю этого вам.

            Оставайтесь голодными. Оставайтесь глупыми.


        </div>

        <climb-component :btn='{{json_encode(['name'=>trans('structure.element.btn_to_top')])}}'></climb-component>
    </div>
    @includeFirst(['layouts.footer', 'errors.parts.no-file'], ['fileName'=>' \'footer\''])
</body>
</html>
