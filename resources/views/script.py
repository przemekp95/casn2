import re
from bs4 import BeautifulSoup
from docx import Document
import requests
from PyPDF2 import PdfReader

# Szablon Blade
TEMPLATE = """
@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>
    <section class="blog-details-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-details-img">
                        <!-- IMAGE PLACEHOLDER -->
                        <img src="images/placeholder.jpg" class="img-fluid d-block mx-auto" style="display: block; margin: 0 auto;">
                    </div>

                    <div class="blog-info p-3">
                        <h2 class="text-dark mb-3">[AUTHOR]</h2>

                        <div class="blog-info-desc">
                            [CONTENT]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
"""

def read_text_from_pdf(file_path):
    """
    Odczytuje tekst z pliku PDF.
    """
    reader = PdfReader(file_path)
    text = ""
    for page in reader.pages:
        text += page.extract_text()
    return text

def read_text_from_word(file_path):
    """
    Odczytuje tekst z pliku Word (docx).
    """
    doc = Document(file_path)
    return "\n".join([p.text for p in doc.paragraphs])

def read_text_from_url(url):
    """
    Pobiera tekst z podanego URL.
    """
    response = requests.get(url)
    response.raise_for_status()
    return response.text

def prepare_content(raw_text):
    """
    Przygotowuje strukturę nowego tekstu:
    - Automatycznie rozdziela na nagłówki, akapity i listy.
    - Umieszcza miejsce na grafikę na końcu każdego dużego rozdziału.
    """
    sections = re.split(r'(?:\n\n|\n(?=I{1,3}\.|V\.))', raw_text.strip())
    content = ""
    for section in sections:
        section = section.strip()
        if re.match(r'^I{1,3}\.|V\.', section):  # Jeśli to nagłówek
            content += f"<h2>{section}</h2>\n"
        elif section.startswith("-"):  # Lista punktowana
            content += "<ul>\n"
            for item in section.split("\n"):
                content += f"  <li>{item[1:].strip()}</li>\n"
            content += "</ul>\n"
        elif section.startswith("[GRAPHIC]"):  # Placeholder na grafikę
            content += '<div style="text-align: center;">\n  <!-- IMAGE PLACEHOLDER -->\n</div>\n'
        else:  # Normalny akapit
            content += f"<p style='text-align: justify;'>{section}</p>\n"

    # Dodanie grafiki na końcu każdej sekcji
    content += '<div style="text-align: center;">\n  <!-- IMAGE PLACEHOLDER -->\n</div>\n'
    return content

def generate_new_template(raw_text, author, output_path):
    """
    Tworzy nowy plik Blade z podmienioną treścią, automatycznie rozmieszczając nagłówki, listy i placeholdery na grafiki.
    """
    # Przygotowanie treści
    content = prepare_content(raw_text)

    # Zamiana placeholderów w szablonie
    new_template = TEMPLATE.replace("[TITLE]", "Nowy Tytuł Analizy")
    new_template = new_template.replace("[AUTHOR]", author)
    new_template = new_template.replace("[CONTENT]", content)

    # Zapis do pliku wynikowego
    with open(output_path, 'w', encoding='utf-8') as file:
        file.write(new_template)

    print(f"Nowy plik Blade zapisano jako: {output_path}")

def main():
    # Pobranie tekstu
    input_mode = input("Podaj źródło tekstu (direct/word/pdf/url): ").strip().lower()
    if input_mode == 'direct':
        raw_text = input("Wpisz tekst: ").strip()
    elif input_mode == 'word':
        file_path = input("Podaj ścieżkę do pliku Word: ").strip()
        raw_text = read_text_from_word(file_path)
    elif input_mode == 'pdf':
        file_path = input("Podaj ścieżkę do pliku PDF: ").strip()
        raw_text = read_text_from_pdf(file_path)
    elif input_mode == 'url':
        url = input("Podaj URL: ").strip()
        raw_text = read_text_from_url(url)
    else:
        print("Nieprawidłowy wybór.")
        return

    # Podaj autora i ścieżkę wyjściową
    author = input("Podaj autora: ").strip()
    output_path = input("Podaj ścieżkę do pliku wynikowego Blade: ").strip()

    # Generowanie nowego pliku Blade
    generate_new_template(raw_text, author, output_path)

if __name__ == "__main__":
    main()
