<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <title>Mag88</title>
</head>
<body>

<header>
    <div class="header__main-visual">
        <img src="{{ asset('images/mainvisual.jpg') }}" alt="メインビジュアル">
    </div>
    <div class="header__logo">
        <a href="#"><img src="{{ asset('images/logo.svg') }}" alt="Mag88"></a>
    </div>
</header>

<section class="magazine">
    <div class="magazine__text">
        <h2>A special, long article in a newspaper or magazine</h2>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="magazine__container">
        <a href="#" class="magazine__button">
            <img src="{{ asset('images/magazine-archive.jpg') }}" alt="magazine">
            <div class="button__layer">
                <h3>Archive</h3>
                <p>テキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </a>
        <a href="#" class="magazine__button">
            <img src="{{ asset('images/magazine-new.jpg') }}" alt="magazine">
            <div class="button__layer">
                <h3>New</h3>
                <p>テキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </a>
    </div>
</section>

<section class="fashion">
    <div class="fashion__container">
    <h2>Fashion & Style</h2>
    <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    <a href="#">Read More</a>
    </div>
</section>

<div class="catalog-antique-wrapper">
    <section class="catalog">
        <div class="catalog__image">
            <img src="{{ asset('images/catalog.jpg') }}" alt="catalog">
        </div>
        <div class="catalog__container">
            <h2>Catalog</h2>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
        </div>
    </section>

    <section class="antique">
        <div class="antique__container">
            <h2>antique</h2>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
        </div>
        <div class="antique__image">
            <img src="{{ asset('images/antique.jpg') }}" alt="catalog">
        </div>
    </section>
</div>

<footer>
    <div class="footer__top">
        <div class="footer__container">
            <h2><a href="#"><img src="{{ asset('images/logo.svg') }}" alt="Mag88"></a></h2>
            <div class="footer__list">
                <h3>タイトル</h3>
                <ul>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                </ul>
            </div>
            <div class="footer__text">
                <h3>タイトルタイトルタイトル</h3>
                <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>
        </div>
    </div>
    <p>&copy; Mag88</p>
</footer>
</body>
</html>