# website-with-login
an old web technologies final assigment of mine!! i used mysql, html, css, php and a little bit js.

# Documentation (in Turkish)

# İNTERNET TEKNOLOJILERI VE WEB PROGRAMLAMA

PHP ve MYSQL ile Kullanıcı Girişli Web Sitesi Projesi

## Uygulamanın Genel Görünümü ve İlk İzlenimler

Öncelikle Uygulamamızın tasarımını kullanıcı girişi yapmadan tanıyalım

### Ana Sayfa

![1](README_ASSETS/1.png)

Uygulamamın genel yapısı 3 temel öğeden oluşuyor:

- Header: Kullanıcının sitede navigasyonunu sağlayan kullanışlı bar
    ▪ Sol Tarafında; Uygulama Logosu, Ana Sayfa, Haberler, Profil tuşlarını
    ▪ Sağ Tarafında; Giriş Yap, Kayıt Ol tuşlarını barındırıyor
    ▪ Main View’den hemen önce giriş diyaloğu
- Main View: Kullanıcılara göstereceğimiz içeriklerin bulunduğu bölge
- Footer: Kısa Bilgi

Şimdi bu alt menülerin içeriklerine bakalım

### Haberler

![2](README_ASSETS/2.png)

### Profiliniz

![3](README_ASSETS/3.png)

- Görüldüğü üzere giriş yapmamış kullanıcının erişim izni olmadığından içerikleri görüntüleyemiyor.
- Giriş Yap formu ise header’a bağlı olduğundan bütün sayfalarımızdan giriş yapabilme imkanı sağlıyor

### Kayıt Ol

![4](README_ASSETS/4.png)

- Kullanıcının daha çabuk kayıt olabilmesi için ekstra bilgileri üyelik tamamlandıktan sonra girebileceğini
  belirtiyoruz


## Üyelik ve Kullanıcı Girişi

Kullanıcı üyeliği ve giriş sistemine geçmeden önce veritabanımız tanıyalım

![5](README_ASSETS/5.png)

### Veritabanı

Users tablom

▪ **idUsers:** kullanıcıları idleri. Her yeni kullanıcı için bir önce yaratılan kullanıcının id’si+1 şeklinde
oluşur
▪ **uidUsers:** kullanıcının unique kullanıcı ismi. Başkasıyla paylaşılamaz
▪ emailUsers: eposta
▪ **pwdUsers:** kullanıcının şifresi
▪ **bdateUsers:** kullanıcının doğum günü. Date formatında saklanmakta
▪ **avatarUsers:** kullanıcının istediği profil resminin url’i
▪ **activeUsers:** kullanıcının aktiflik durumu. Kullanıcı hesabını dondurmaya karar verirse
kullanılacak
▪ **phoneUsers:** kullanıcının telefon numarası
▪ **adresUsers:** kullanıcının adresi
▪ **detailUsers:** kullanıcının kendisi hakkında girmek istediği bilgiler

Şimdi yeni bir kullanıcı oluşturalım;

### Üyelik Almak

![6](README_ASSETS/6.png)

```
http://localhost/userProje/signup.php?signup=success
// başarılı giriş yapıldı
```

Adres çubuğunda başarılı mesajını gördükten sonra anasayfaya geri dönebiliriz. Fakat öncelikle yanlış
durumlara bakalım

```
http://localhost/userProje/signup.php?error=emptyfields&uid=&mail=
// Boş bırakılmış zorunlu alanlar var
```
```
http://localhost/userProje/signup.php?error=usertaken&mail=
// Kullanıcı ismi daha önce alınmış
```
```
http://localhost/userProje/signup.php?error=invaliduid&mail=cafer@cafer
// Eposta yanlış formatta
```
```
http://localhost/userProje/signup.php?error=passwordcheck&uid=&mail=
// İlk girilen şifreyle ikinci şifre tutmuyor
```

Bu fonksiyonlarımızın hepsi signup.in.php dosyasında tutuluyor:

### Giriş

![7](README_ASSETS/7.png)


### Kullanıcının Gözünden Site

Kullanıcıyı karşılama ekranı ve giriş yapılması sonrasında göze çarpan değişiklikler

![8](README_ASSETS/8.png)

Şimdi ise daha önce erişim izni sağlayamadığımız bölgelere göz atalım

### Haberler

![9](README_ASSETS/9.png)

### Profiliniz

![10](README_ASSETS/10.png)

Şimdi sırasıyla “Düzenle” ve “Dondur” seçeneklerine bakalım

### Profili Düzenle

![11](README_ASSETS/11.png)

Profiliniz sayfasında yaptığımız değişiklikleri görelim

![12](README_ASSETS/12.png)

Görüldüğü üzere değişikliklerimiz veritabanına işlemiş.

### Hesabı Dondurma (Deaktif Etme)

![13](README_ASSETS/13.png)

Kullanıcı web uygulamamızdan tamamen farklı bir arayüze sahip Profiliniz Aktif Değil sayfasına atıldı.
Dilerse Aktifleştir tuşuna basıp profilini aktif edebilir.

![14](README_ASSETS/14.png)

![15](README_ASSETS/15.png)

## Admin Paneli

### Bütün Kullanıcılar

Veritabanına kayıtlı bütün kullanıcıları listeleyen ve kaldırma imkanı sağlayan tablo

![16](README_ASSETS/16.png)

Görüldüğü üzere 13 idsine sahip kullanıcıyı kaldır ikonuna basarak veritabanından sildik
