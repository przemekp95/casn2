@extends('layouts.app')

@section('title', 'Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <article class="article-content">
                <header class="mb-4">
                    <h1 class="display-4 mb-3">Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech</h1>

                    <div class="article-meta mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/Ordo.png') }}" alt="Adw. dr Bartosz Lewandowski"
                                 class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h5 class="mb-0">Adw. dr Bartosz Lewandowski</h5>
                                <small class="text-muted">Autor artykułu</small>
                            </div>
                        </div>

                        <div class="article-info">
                            <span class="badge bg-primary me-2">Analiza</span>
                            <span class="badge bg-secondary">CASN</span>
                        </div>
                    </div>
                </header>

                <div class="article-body">
                    <div class="content-section mb-5">
                        <h2>Treść analizy</h2>
                        <div class="article-text">
                            <h3>I. Wstęp</h3> <p>Zarówno Konstytucja Rzeczypospolitej Polskiej z 2 kwietnia 1997 r., jak i Ustawa Zasadnicza Republiki Niemieckiej z 23 maja 1949 r. zawiera klasyczną formułę podziału władz, gwarantującą najważniejszy aspekt ustroju demokratycznego państwa tj. zasadę niezależności i autonomii władzy sądowniczej.</p> <p>Problem ten został wyartykułowany w opinii Komisji Weneckiej na temat poprawek do serbskiej konstytucji z 2018 r. Dostrzeżono wówczas problem z sformułowaniem „wzajemna kontrola” jako określenia stosunków między trzema władzami, ponieważ może on być przyczyną błędnej interpretacji roli innych władz, a w szczególności władzy wykonawczej w stosunku do sądów i ostatecznie może doprowadzić do politycznej kontroli nad sądownictwem.</p> <h3>II. Sposób powoływania sędziów sądów powszechnych i administracyjnych w Polsce</h3> <p>Zgodnie z artykułem 10 Konstytucji RP z 1997 r. ustrój Rzeczypospolitej Polskiej opiera się na podziale i równowadze władzy ustawodawczej, władzy wykonawczej i władzy sądowniczej.</p> <p>Procedura powoływania sędziów w Polsce przewiduje współdziałanie władzy sądowniczej, wykonawczej i ustawodawczej. Jest ona istotna dla samej sytuacji prawnej sędziego, ponieważ wpływa na zapewnienie gwarancji stabilności i bezpieczeństwa zawodowego, a więc również gwarancji niezawisłości sędziowskiej.</p> <h3>III. Sposób powoływania sędziów w RFN</h3> <p>Zgodnie z Ustawą Zasadniczą Republiki Federalnej Niemiec z 23 maja 1949 roku władza sądownicza jest sprawowana przez sądy federalne oraz przez sądy krajów związkowych.</p> <p>Artykuł 92 Konstytucji Niemiec wprost powierza władzę sądowniczą sędziom. Można zauważyć, że sama Ustawa Zasadnicza RFN powierza organizację sądownictwa powszechnego właściwym krajom związkowym.</p> <h3>IV. Porównanie</h3> <p>Mówiąc o sposobach powoływania sędziów sądów w Polsce i sposobach powoływania sędziów w RFN, można im przypisać pewną cechę wspólną. Należy zauważyć, że łączą je podstawowe uwarunkowania pełnienia służby w ramach wymiaru sprawiedliwości, częściowo status sędziów oraz zasada niezawisłości sędziowskiej i niezależności sądów.</p> <h3>V. Wnioski</h3> <p>Komisja Wenecka nie wyznaczyła odgórnych i sztywnych standardów, które muszą zachować państwa, aby ich sądownictwo można było uznać za niezawisłe i niezależne.</p> <p>Jak trafnie zauważa Hanna Suchocka, istnienie takiej rady samo w sobie nie stanowi gwarancji autonomii sądownictwa - sama rada również musi być wolna od wpływów politycznych.</p> <h3>Przypisy</h3> <ol> <li>H. Suchocka, Wokół standardów europejskich dotyczących powoływania sędziów sądów (z doświadczeń Komisji Weneckiej), Toruńskie Studia Polsko-Włoskie, 2018.</li> <li>Ustawa z 7 kwietnia 1989 r. o zmianie Konstytucji Rzeczypospolitej Ludowej.</li> <li>L. Garlicki, Polskie Prawo Konstytucyjne, Warszawa 2020.</li> <li>Ustawa z 12 maja 2011 r. o Krajowej Radzie Sądownictwa.</li> <li>A. Machnikowska, O niezawisłości sędziów i niezależności sądów w trudnych czasach, Warszawa 2017.</li> </ol>
                        </div>
                    </div>

                    <div class="content-section">
                        <h3>Informacje o autorze</h3>
                        <div class="author-bio p-4 bg-light rounded">
                            <div class="d-flex align-items-start">
                                <img src="{{ asset('images/Ordo.png') }}" alt="Adw. dr Bartosz Lewandowski"
                                     class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5>Adw. dr Bartosz Lewandowski</h5>
                                    <p class="mb-2">Adwokat, doktor nauk prawnych, Dyrektor Centrum Interwencji Procesowej Ordo Iuris. Absolwent studiów prawniczych na Wydziale Prawa i Administracji Uniwersytetu Warszawskiego.</p>
                                    <a href="{{ url('/lewandowski') }}" class="btn btn-outline-primary btn-sm">
                                        Zobacz wszystkie artykuły autora
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<style>
.article-content {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.article-meta {
    border-bottom: 1px solid #dee2e6;
    padding-bottom: 1.5rem;
}

.article-info .badge {
    font-size: 0.8rem;
}

.content-section h2 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
}

.content-section h3 {
    color: #34495e;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.article-text {
    line-height: 1.8;
    font-size: 1.1rem;
    color: #2c3e50;
}

.article-text p {
    margin-bottom: 1.5rem;
}

.author-bio {
    margin-top: 1rem;
}
</style>
@endsection