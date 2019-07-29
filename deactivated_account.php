<style>
    figure#tus,
    h1 {
        min-height: 300px;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    figure#tus button {
        border-radius: 30%;
        width: 300px;
        height: 150px;
        border: none;
        color: white;
        font-weight: 800;
        font-size: 25px;
        background: rgba(13, 115, 216, 0.8);
        text-shadow: 0 3px 1px rgba(13, 115, 216, 0.8);
        box-shadow: 0 8px 0 rgba(13, 115, 216, 0.8), 0 15px 20px rgba(13, 115, 216, 0.8);
        outline: none;
        cursor: pointer;
        text-align: center;
        margin-top: 30px;
    }
    figure#tus button span,
    h1 {
        position: relative;
    }
    p {
        font-weight: 800;
        font-size: 25px;
        font-family: 'Open Sans Condensed', sans-serif
    }
    /*HESABINI DEAKTİF ETMİŞ KULLANICIYI BU SAYFAYA YÖNLENDİRİP GERİ AKTİF ETMEK İSTEYİP İSTEMEDİĞİNİ SORUYORUZ*/
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiliniz Aktif Değil</title>
</head>


<center>
    <figure id="tus">
        <form>
            <p>HESABINIZI DAHA ÖNCE DEAKTİF ETMİŞSİNİZ. <p> YENİDEN AKTİF HALE GETİRMEK İSTERSENİZ İÇİN LÜTFEN AŞAĞIDAKİ TUŞA TIKLAYINIZ</p></p>
            <button type="submit" formaction="inner/activate.php"><span>HESABI AKTİFLEŞTİR</span>
            </button>
        </form>
    </figure>
</center>