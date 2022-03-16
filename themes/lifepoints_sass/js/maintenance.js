(function ($) {
  "use strict";

  $(document).ready(function () {
    // Use language setting to translate messages.

    var lang = (window.navigator.languages) ? window.navigator.languages[0] 
      : window.navigator.language || window.navigator.userLanguage || '';

    var translated = null;
    if (translations.hasOwnProperty(lang.toLowerCase())) {
      translated = translations[lang.toLowerCase()];
    }
    else if (translations.hasOwnProperty(lang.substr(0, 2).toLowerCase())) {
      translated = translations[lang.substr(0, 2).toLowerCase()];
    }

    if (translated) {
      if (translated['title'])
        $("title").text(translated['title'] + ' | LifePoints');
      if (translated['heading'])
        $("h3#heading").text(translated['heading']);
      if (translated['message'])
        $("p#message").text(translated['message']);
    }

  });

  // Set of translations from OP-5781
  var translations = {
    'ar': {
      "title": "",
      "heading": "نجري حاليًا الصيانة المقررة لتحسين موقع ويب",
      "message": "نجري حاليًا الصيانة المقررة لتحسين موقع ويب LifePoints. إذا كنت ترغب في مزيد من المرح من LifePoints، فراجع صفحاتنا على وسائل التواصل الاجتماعي أدناه، وإلا فسنعود للإنترنت قريبًا!"},
    'cs': {
      "title": "",
      "heading": "Brzy se ozveme!",
      "message": "Právě provádíme plánovanou údržbu kvůli zdokonalení stránek LifePoints. Pokud si chceš s body LifePoints užít víc zábavy, podívej se na naše sociální sítě níže. Jinak budeme zanedlouho zase online!"},
    'da': {
      "title": "",
      "heading": "Vi er snart tilbage.",
      "message": "Vi foretager i øjeblikket planlagt vedligeholdelse for at forbedre LifePoints -webstedet. Hvis du vil have mere LifePoints-hygge, kan du tjekke ind på vores sociale mediesider nedenfor. Ellers er vi snart tilbage online!"},
		'de': {
      "title": "",
      "heading": "Wir sind bald zurück!",
      "message": "Wir führen derzeit Verbesserungen an der LifePoints-Website durch. Wenn Sie weiter Spaß mit LifePoints haben wollen, besuchen Sie unsere Social-Media-Kanäle. Ansonsten sind wir bald wieder online!"},
	  'en-gb': {
      "title": "",
      "heading": "We’ll be back soon!",
      "message": "We’re currently performing scheduled maintenance to improve the LifePoints website. If you want more LifePoints fun, check our social media pages below; otherwise, we’ll be back online shortly!"},
	  'en-us': {
      "title": "",
      "heading": "We’ll be back soon!",
      "message": "We’re currently performing scheduled maintenance to improve the LifePoints website. If you want more LifePoints fun, check our social media pages below; otherwise, we’ll be back online shortly!"},
	  'en': {
      "title": "",
      "heading": "We’ll be back soon!",
      "message": "We’re currently performing scheduled maintenance to improve the LifePoints website. If you want more LifePoints fun, check our social media pages below; otherwise, we’ll be back online shortly!"},
		'el': {
      "title": "",
      "heading": "Θα επιστρέψουμε σύντομα!",
      "message":"Διεξάγεται προγραμματισμένη συντήρηση για τη βελτίωση της ιστοσελίδας LifePoints. Για περισσότερη διασκέδαση, επισκέψου τις παρακάτω σελίδες κοινωνικών μέσων. Αλλιώς, θα επανέλθουμε σύντομα!"},
		'es': {
      "title": "",
      "heading": "¡Regresaremos pronto!",
      "message": "El sitio web de LifePoints se encuentra actualmente en mantenimiento. Para seguir disfrutando de la experiencia LifePoints, visita nuestras redes sociales a continuación. Volveremos muy pronto."},
		'es-es': {
      "title": "",
      "heading": "¡Estaremos de vuelta pronto!",
      "message": "El sitio web de LifePoints se encuentra actualmente en mantenimiento. Para seguir disfrutando de la experiencia LifePoints, accede a nuestras redes sociales a continuación. Volveremos muy pronto."},
		'es-ar': {
      "title": "",
      "heading": "¡Estaremos de vuelta pronto!",
      "message": "El sitio web de LifePoints se encuentra actualmente en mantenimiento. Para seguir disfrutando de la experiencia LifePoints, accedé a nuestras redes sociales a continuación. Volveremos muy pronto."},
		'fi': {
      "title": "",
      "heading": "Otamme pian taas yhteyttä!",
      "message": "Parannamme parhaillaan LifePoints-sivustoa suorittamalla ajoitettua ylläpitoa. Voit sillä aikaa tutustua uusiin LifePoints-mahdollisuuksiin käymällä sivuillamme sosiaalisessa mediassa. Olemme kuitenkin pian taas käytettävissä!"},
		'fr': {
      "title": "Site en maintenance.",
      "heading": "On revient très vite !",
      "message": "Une maintenance programmée est en cours pour améliorer notre site LifePoints. Pour vous divertir avec LifePoints, visitez nos réseaux sociaux. Sinon un peu de patience, nous serons bientôt de retour !"},
		'hu': {
      "title": "",
      "heading": "Hamarosan visszatérünk!",
      "message": "Most beütemezett karbantartást végzünk, hogy fejlesszük a LifePoints webhelyét. Ha addig is szórakozni szeretnél a LifePoints-cal, nézd meg alább a közösségi oldalainkat. Hamarosan visszatérünk!"},
		'id': {
      "title": "",
      "heading": "Kami akan segera kembali!",
      "message": "Kami sedang melakukan pemeliharaan untuk meningkatkan kualitas situs LifePoints. Jika kamu ingin yang lebih seru dari LifePoints, kunjungi medsos kami di bawah ini, atau tunggu kami online kembali!"},
		'it': {
      "title": "Manutenzione in corso",
      "heading": "Torniamo presto!",
      "message": "Al momento stiamo effettuando una manutenzione programmata per migliorare il sito web di LifePoints. Se vuoi divertirti con LifePoints, vai sui nostri social media qui sotto. Torneremo online a breve."},
		'ja': {
      "title": "",
      "heading": "まもなく再開します！",
      "message": "現在LifePointsウェブサイトはサービス向上のため、定期メンテナンス中です。LifePointsをさらにお楽しみいただくには、以下から当社のソーシャルメディアページをチェックしてください。まもなくオンラインに戻ります！"},
		'ko': {
      "title": "",
      "heading": "곧 정상화되니 조금만 기다려 주세요!",
      "message": "현재, LifePoints 웹사이트를 개선하기 위해 예정된 유지보수를 진행 중입니다. LifePoints와 관련해 더 많은 재미를 느껴 보시려면, 아래 소셜 미디어 페이지를 살펴보세요. 저희 웹사이트도 곧 정상화되니 참고해주세요!"},
		'ms': {
      "title": "",
      "heading": "Kami akan kembali tidak lama lagi.",
      "message": "Penyelenggaraan berjadual sedang dilakukan untuk penambahbaikan laman web LifePoints. Semak lebih banyak manfaat LifePoints di halaman media sosial kami di bawah. Kami akan kembali sebentar lagi."},
		'nl-be': {
      "title": "",
      "heading": "Dadelijk terug!",
      "message": "We doen momenteel gepland onderhoud om de LifePoints website te verbeteren. Wil je meer plezier beleven met LifePoints, ga dan naar onze social media, maar we zijn snel weer online!"},
		'nl-nl': {
      "title": "",
      "heading": "We zijn binnenkort terug!",
      "message": "We voeren momenteel gepland onderhoud uit om de LifePoints website te verbeteren. Als je meer plezier wilt beleven met LifePoints, bekijk dan onze social media hieronder. Anders zijn we snel weer online!"},
		'no': {
      "title": "",
      "heading": "Vi er snart tilbake!",
      "message": "Vi utfører nå planlagt vedlikehold for å forbedre LifePoints-nettsiden. Hvis du vil ha mer moro med LifePoints, kan du sjekke våre sosiale medie-sider nedenfor. Ellers er nettsiden snart tilbake!"},
		'pl': {
      "title": "",
      "heading": "Wkrótce będziemy ponownie dostępni!",
      "message": "Przeprowadzamy planową konserwację dla poprawy witryny LifePoints. Chcesz teraz zabawić się z LifePoints? Sprawdź nasze strony w mediach społecznościowych poniżej; wkrótce wrócimy do trybu online!"},
		'pt': {
      "title": "",
      "heading": "Voltaremos em breve!",
      "message": "Estamos fazendo uma manutenção programada no site do LifePoints. Se quiser se divertir mais com o LifePoints, confira nossas páginas nas redes sociais abaixo. Ou aguarde, pois logo estaremos de volta!"},
		'pt-br': {
      "title": "",
      "heading": "Voltaremos em breve!",
      "message": "Estamos fazendo uma manutenção programada no site do LifePoints. Se quiser se divertir mais com o LifePoints, confira nossas páginas nas redes sociais abaixo. Ou aguarde, pois logo estaremos de volta!"},
		'pt-pt': {
      "title": "",
      "heading": "Voltamos em breve!",
      "message": "Estamos a proceder a uma manutenção programada para melhorar o site LifePoints. Se quiser divertir-se mais com o LifePoints, visite as nossas redes sociais abaixo. Ou aguarde, pois voltamos em breve!"},
	  'ro': {
      "title": "",
      "heading": "Vom reveni în curând!",
      "message": "În prezent efectuăm întreținerea programată a site-ului LifePoints. Dacă dorești mai multe distracții  LifePoints, vizitează paginile noastre de socializare de mai jos. Oricum, vom reveni în curând!"},
		'ru': {
      "title": "",
      "heading": "Мы скоро вернемся!",
      "message": "Сейчас мы проводим плановое обслуживание с целью улучшения работы сайта LifePoints. Интересную информацию о LifePoints можно найти на наших страницах в социальных сетях ниже, а мы скоро вернемся!"},
		'sv': {
      "title": "",
      "heading": "Vi är snart tillbaka!",
      "message":"Vi utför nu schemalagt underhåll för att förbättra LifePoints webbplats. Om du vill ta del av allt roligt hos LifePoints, besök våra sidor på sociala medier nedan. Annars är vi snart tillbaka online!"},
		'th': {
      "title": "เว็บไซต์อยู่ระหว่างปิดปรับปรุง",
      "heading": "เราจะเปิดบริการอีกครั้งในเร็ว ๆ นี้",
      "message": "ขณะนี้เรากำลังปิดปรับปรุงเว็บไซต์ LifePoints ตามกำหนดการ หากคุณต้องการความสนุกสนานเพิ่มเติมจาก LifePoints โปรดตรวจสอบหน้าโซเชียลมีเดียของเราด้านล่างนี้ เราจะเปิดบริการอีกครั้งในเร็ว ๆ นี้"},
		'tr': {
      "title": "",
      "heading": "Yakında geri döneceğiz!",
      "message": "LifePoints web sitesini iyileştirmek için planlı bakım yapıyoruz. Daha fazla LifePoints eğlencesi için, aşağıdaki sosyal medya sayfalarımıza göz atın; aksi takdirde kısa sürede tekrar çevrim içi olacağız!"},
		'vi': {
      "title": "",
      "heading": "Chúng tôi sẽ trở lại ngay!",
      "message": "Chúng tôi hiện đang bảo trì để cải thiện trang web LifePoints. Nếu bạn muốn LifePoints thú vị hơn, hãy kiểm tra trang mạng xã hội bên dưới; nếu không, chúng tôi sẽ trở lại trực tuyến ngay!"},
		'zh-cn': {
      "title": "网站正在维护中",
      "heading": "我们马上回来！",
      "message": "我们目前正在执行定期维护，以改善LifePoints网站。如果您想体验更多LifePoints的乐趣，请查看下面的社交媒体页面；否则，我们很快就会恢复在线！"},
		'zh-hk': {
      "title": "",
      "heading": "很快回來！",
      "message": "我們正在進行定期維護，以改進LifePoints網站。如想更多了解LifePoints的樂趣，請前往以下社交媒體專頁，我們很快就會再次上線！"},
		'zh-tw': {
      "title": "",
      "heading": "我們很快將會恢復作業！",
      "message": "我們目前正在執行計劃維護，以提升 LifePoints 網站效能。如果您想要獲得更多 LifePoints 樂趣，請查看下方的社交媒體頁面；我們很快將會恢復作業！"},
    };

})(jQuery);
